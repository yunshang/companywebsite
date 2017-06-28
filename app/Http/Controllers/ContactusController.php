<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\Admin\SettingRepository;

class ContactusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $setting;
    public function __construct(SettingRepository $setting)
    {
        $this->setting = $setting;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting =  $this->setting->getsettinginfo();
        return view('contactus',compact('setting'));
    }
}
