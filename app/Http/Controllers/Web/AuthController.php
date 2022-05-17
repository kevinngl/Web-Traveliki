<?php

namespace App\Http\Controllers\Web;
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
        $this->middleware('guest:web')->except('do_logout');
    }
    public function index()
    {
        return view('page.web.auth.signin');
    }
    public function register()
    {
        return view('page.web.auth.signup');
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
    public function do_register(Request $request)
    {
        try{
            $nama = $request->nama;
            $alamat = $request->alamat;
            $email = $request->email;
            $nomor_hp = $request->nomor_hp;
            $password = $request->password;
            $role = $request->role;

            $response = Http::post('http://192.168.137.1:8080/api/user/register', [
                'nama' => $nama,
                'alamat' => $alamat,
                'email' => $email,
                'nomor_hp' => $nomor_hp,
                'password' => $password,
                'role' => $role,
            ]);

            return $response->json();
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

