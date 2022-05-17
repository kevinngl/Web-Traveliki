<?php

namespace App\Http\Controllers\Office;
use App\Http\Controllers\Controller;

use App\Models\UserCredential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Client\ConnectionException;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:office')->except('do_logout');
    }
    public function index()
    {
        return view('page.office.auth.main');
    }
    
    public function do_login(Request $request)
    {
        try{
            $email = $request->email;
            $password = $request->password;
            $response = Http::post('http://192.168.137.1:8080/api/user/login', [
                'email' => $email,
                'password' => $password,
            ]);

            $responseDecoded = json_decode($response->body());

            if ($responseDecoded->status == true) {
                $userCredential = new UserCredential($responseDecoded->data);
                UserCredential::login($userCredential);
                return response()->json([
                    'alert' => 'success',
                    'message' => 'Selamat datang di Traveliki',
                    'callback' => 'reload',
                ]);
            }else{
                return response()->json([
                    'alert' => 'error',
                    'message' => 'Maaf, sepertinya ada beberapa kesalahan yang terdeteksi, silakan coba lagi.',
                ]);
            }
        }
        catch(ConnectionException $exception){
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf, Service User Sedang Down.',
            ]);
        }
    }
    public function do_logout()
    {
        UserCredential::logout();
        return redirect()->route('/home');
    }
}

