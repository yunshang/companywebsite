<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\Admin\EnterpriseStyleRepository;

class CultureController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $enterprisestyle;
    public function __construct(EnterpriseStyleRepository $enterprisestyle)
    {
        $this->enterprisestyle = $enterprisestyle;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enterprisestyles = $this->enterprisestyle->getAllEnteriseStyles();
        return view('culture',compact('enterprisestyles'));
    }
}
