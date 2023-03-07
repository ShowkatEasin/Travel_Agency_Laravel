<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home (){

        return view('UserView.home');
    }

    public function packages (){

        return view('UserView.packages');
    }

    public function about (){

        return view('UserView.about');
    }

    public function blogs (){

        return view('UserView.blogs');
    }

    public function contact (){

        return view('UserView.contact');
    }


}
