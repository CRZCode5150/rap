<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConnectionOrFavorite;
use App\User;
use Hash;
use Auth;

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
    public function index(Request $request)
    {
        $this->middleware('auth');
        $query = $request->query('rap');

        $results = [];
        if (!empty($query)) {
            $results = User::where('username', 'like', '%'.$query.'%')->get();
        }

        $data = [
            'results' => $results
        ];

        return view('home')->with($data);
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

        if (Auth::attempt(['username' => $request->username, 'password' => $request->CreateYourPassword])) {
            // Authentication passed...
            return redirect()->intended('home');
        }
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication passed.
            return redirect()->intended('home');
        } else {
            return back();
        }
    }

    public function viewProfile($id)
    {
        $user = User::find($id);
        $connectionsOrFavorites = ConnectionOrFavorite::where('sender', '=', Auth::id())
            ->orWhere('receiver', '=', Auth::id())
            ->with('sender', 'receiver')
            ->get();

        $data = [
            'user' => $user,
            'connectionsOrFavorites' => $connectionsOrFavorites
        ];

        return view('profile')->with($data);
    }

    public function addRelationship($receiverId)
    {
        $newRecord = new ConnectionOrFavorite;
        $newRecord->sender = Auth::id();
        $newRecord->receiver = $receiverId;
        $newRecord->save();

        return redirect('/profile', ['id' => $receiverId]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
