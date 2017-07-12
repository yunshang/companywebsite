<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Repositories\Admin\SettingRepository;
use Auth;

class SubsidiaryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $setting;
    public function __construct(SettingRepository $setting)
    {
//        $this->middleware('auth');
        $this->setting = $setting;
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
        return view('subsidiary',compact('setting'));
    }
}
