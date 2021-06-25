<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        // dd(auth()->user()); #可查看登入使用者
        return view('dashboard');
    }
}
