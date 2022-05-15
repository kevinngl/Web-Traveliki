<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('page.web.home.main');
    }
    public function pesawat(Request $request)
    {
        return view('page.web.pesawat.main');
    }
    public function hotel(Request $request)
    {
        return view('page.web.hotel.main');
    }
    public function destinasi(Request $request)
    {
        return view('page.web.destinasi.main');
    }
    public function tiket(Request $request)
    {
        return view('page.web.tiket.main');
    }
    public function detail(Request $request)
    {
        return view('page.web.hotel.detail');
    }
    public function order(Request $request)
    {
        return view('page.web.order.main');
    }
    // public function show(Request $request, User $user)
    // {
    //     return view('page.home.show', compact('user'));
    // }
}
