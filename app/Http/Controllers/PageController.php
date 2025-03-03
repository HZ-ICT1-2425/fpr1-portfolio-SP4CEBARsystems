<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        return view('welcome');
    }

    function profile() {
        return view('profile');
    }
}
