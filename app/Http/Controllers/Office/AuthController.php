<?php

namespace App\Http\Controllers\Office;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Exception;

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
    public function do_login()
    {
        // $datas=$request->only('email', 'password');
        // if(Auth::attempt($datas)){
        //     return response()->json([
        //         'alert' => 'success',
        //         'message' => 'Selamat datang '. Auth::guard('office')->user()->nama,
        //     ]);
        // }else{
        //     return response()->json([
        //         'alert' => 'error',
        //         'message' => 'Maaf, sepertinya ada kesalahan, silahkan coba lagi.',
        //     ]);
        // }
        return redirect()->route('home');
    }
    public function do_register(Request $request)
    {
        //
    }
    public function do_logout()
    {
        $employee = Auth::guard('office')->user();
        Auth::logout($employee);
        return redirect()->route('auth');
    }
}

