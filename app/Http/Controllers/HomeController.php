<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

//        Session::flash('alertMessage', 'Successfully submitted.');

        return view('home');
    }
}
