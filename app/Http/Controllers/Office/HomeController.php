<?php

namespace App\Http\Controllers\Office;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('page.office.dashboard.main');
    }
    public function tiket(Request $request)
    {
        return view('page.office.product.main');
    }
    // public function show(Request $request, User $user)
    // {
    //     return view('page.home.show', compact('user'));
    // }
}
