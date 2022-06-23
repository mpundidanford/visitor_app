<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function registration(){
        return view('auth.registration');
    }
}
