<?php namespace App\Http\Controllers;

use App\User;

class TestController extends Controller
{
    public function index()
    {
        return view('welcome', array('email_addresses' => User::pluck('email')->toArray()));
    }
}