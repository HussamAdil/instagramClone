<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    public function index(\App\User $user)
    { 
        return view('home' , compact('user'));
    }

    public function edit(\App\User $user)
    { 
        return view('profile.edit' , compact('user'));
    }
}
