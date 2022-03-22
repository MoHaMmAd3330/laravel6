<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showAdminName()
    {

        return 'Mohammad mohammad';
    }

    public function getindex()
    {

    $data=[];
    $data['id']=5;
    $data['name']='mohammad';
    return view('welcome', $data);

        return view('welcome');
    }


public function getloading()
{
    return view('loading');
}

public function getmaster() {

    return view('/layout/master');
}

public function getaboutus(){
    return view('layout/aboutus');
}


public function gethome(){
    return view('home');
}
}


