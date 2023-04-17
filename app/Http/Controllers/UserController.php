<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function home(){
        return view('user.home');
    }

    public function history(){
        return view('user.history');
    }

    public function rankinguser(){
        return view('user.rankinguser');
    }

    public function exam(){
        return view('user.exam');
    }
}
