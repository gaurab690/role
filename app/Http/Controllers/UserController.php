<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_dashboard()
    {
        return view('user.dashboard'); // View for user dashboard
    }
}