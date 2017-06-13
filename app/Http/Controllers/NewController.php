<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class NewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user = User::find(2);
//        dd(Auth::user());
        return view('new');
    }
    public function newlist()
    {
//        $user = User::find(2);
//        dd(Auth::user());
        return view('newlist');
    }
}