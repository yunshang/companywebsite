<?php


namespace App\Repositories\Admin;

use App\Setting;

class SettingRepository
{
    public function getsettinginfo() {
        return Setting::find(1);
    }

    public function byId($id)
    {
        return Setting::find($id);
    }
}
