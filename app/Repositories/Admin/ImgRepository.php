<?php

namespace App\Repositories\Admin;

use App\Img;

class ImgRepository
{
    public function create(array $attributes)
    {
        return Img::create($attributes);
    }

    public function byId($id)
    {
        return Img::find($id);
    }

    public function Img(array $attributes)
    {
        return Img::create($attributes);
    }

    public function deleteall($styles, $styles_id)
    {
        Img::where('styles', $styles)->where('styles_id', $styles_id)->delete();
    }

    public function findEnterpriseStyleBystyles($styles, $styles_id)
    {
        return Img::where('styles', $styles)->where('styles_id', $styles_id)->get();
    }

}