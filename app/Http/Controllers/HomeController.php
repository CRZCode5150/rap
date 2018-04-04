<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

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

        if ($request->CreateYourPassword != $request->ConfirmYourPassword) {
            return back();
        }


        $newUser = new User;
        $newUser->password = Hash::make($request->CreateYourPassword);
        $newUser->username= $request->username;
        $newUser->firstname = $request->firstname;
        $newUser->lastname = $request->lastname;
        $newUser->city = $request->city;
        $newUser->state = $request->state;
        $newUser->zipcode = $request->zipcode;
        $newUser->isartist = $request->isartist;
        $newUser->save();

        if (Auth::attempt(['username' => $request->username, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('home');
        }
    }
}
