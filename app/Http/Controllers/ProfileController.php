<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile1()
    {
        return view('profile1');
    }

    public function profile2()
    {
        return view('profile2');
    }
}