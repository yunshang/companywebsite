<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\Admin\SettingRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $setting;
    public function __construct()
    {
        $this->setting = $setting;
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
        $setting = parent::getsetting($this->setting);
        return view('home',compact(['setting']));
    }
}
