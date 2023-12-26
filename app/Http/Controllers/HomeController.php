<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

        $data = [
            'title' => 'Home Page',
            'teams' => [
                'Team A',
                'Team B',
                'Team C',
                'Team D',
            ],
        ];

        return view('home', $data );
    }
}
