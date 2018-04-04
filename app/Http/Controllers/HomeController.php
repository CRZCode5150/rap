<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function register(Request $request)
    {
        $newUser = new User;
        $newUser->password = $request->CreateYourPassword;
        $newUser->username= $request->username;
        $newUser->firstname = $request->firstname;
        $newUser->lastname = $request->lastname;
        $newUser->city = $request->city;
        $newUser->state = $request->state;
        $newUser->zipcode = $request->zipcode;
        
        // Get all that data that the user inputted
        // log in
        // go to the homepage
    }
}
