<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs,ValidatesRequests;

    private $setting;

    public function getsetting($setting)
    {
        $this->setting = $setting;
        $setting =  $this->setting->getsettinginfo();
        return $setting;
    }
}
