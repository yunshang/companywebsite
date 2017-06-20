<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Repositories\Admin\SettingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SettingController extends Controller
{
    private $setting;
    public function __construct(SettingRepository $setting)
    {
        $this->setting = $setting;
        $this->middleware('admin');
    }

    public function companyInfo()
    {
        $setting =  $this->setting->getsettinginfo();
        if(user()->hasRole('admin')){
            return view('admin.settings.company',compact('setting'));
        }
        return redirect()->route('admin.index');
    }

    public function update(Request $request,$id)
    {
        $setting = $this->setting->byId($id);
        $setting->company_address = $request->get('company_address');
        $setting->company_phone = $request->get('company_phone');
        $setting->company_email = $request->get('company_email');
        $setting->save();
        return back();
    }

}
