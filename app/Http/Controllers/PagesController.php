<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

       $title = 'Home Page';
        return view('pages.home')->with('title', $title);
    }

    public function about(){
      
        return view('pages.about');
    }   

    public function services(){
     
        return view('pages.services');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function register(){
        return view('pages.register');
    }
}
