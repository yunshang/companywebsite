<?php

namespace App\Console\Commands;

use App\Setting;
use Illuminate\Console\Command;

class FillSetting extends Command
{
    protected $signature = 'setting:seed';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->fillsetting();
    }

    public function fillsetting()
    {
        $setting = Setting::create([
            'company_address' => '浙江省杭州市拱墅区祥园路108号中国智慧信息产业园G座3楼、11楼',
            'company_email' => 'chhr@cholding.com.cn',
            'company_phone' => '(0571)88071501',
        ]);
        return $setting;
    }


}
