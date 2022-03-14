<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/login');
    }

    public function pass_forgot()
    {
        return view('login/olvidar_pass');
    }

    public function create_account()
    {
        return view('login/create_account');
    }


}
