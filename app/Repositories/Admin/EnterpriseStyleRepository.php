<?php

namespace App\Repositories\Admin;

use App\EnterpriseStyle;

class EnterpriseStyleRepository
{
    public function create(array $attributes)
    {
        return EnterpriseStyle::create($attributes);
    }

    public function byId($id)
    {
        return EnterpriseStyle::find($id);
    }

    public function EnterpriseStyle(array $attributes)
    {
        return EnterpriseStyle::create($attributes);
    }

    public function getAllEnteriseStyles()
    {
        return EnterpriseStyle::all();
    }

    public function delete($id)
    {

    }

}
