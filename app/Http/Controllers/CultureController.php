<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\Admin\EnterpriseStyleRepository;
use App\Repositories\Admin\SettingRepository;

class CultureController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $enterprisestyle;
    private $setting;
    public function __construct(EnterpriseStyleRepository $enterprisestyle, SettingRepository $setting)
    {
        $this->setting = $setting;
        $this->enterprisestyle = $enterprisestyle;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $setting = parent::getsetting($this->setting);
        $filter = $request->get('filter');
        $enterprisestyles = $this->enterprisestyle->getAllEnteriseStyles();
        return view('culture',compact(['enterprisestyles','setting','filter']));
    }
}
