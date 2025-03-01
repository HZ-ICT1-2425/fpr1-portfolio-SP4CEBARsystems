<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        return view('welcome');
    }
    function faqShow()
    {
        return view('faq.show');
    }

    function faqIndex() {
        return view('faq.index');
    }

    function profile() {
        return view('profile');
    }
}
