<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function gallery(){
        return view('gallery');
    }

    public function catalog(){
        return view('catalog');
    }

    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function faq(){
        return view('faq');
    }
}
