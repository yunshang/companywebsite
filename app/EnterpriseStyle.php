<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Img;

class EnterpriseStyle extends Model
{
    protected $table = 'enterprise_styles';
    protected $fillable = ['title','subtitle'];

    public function getallimg()
    {
        return Img::where('styles', 'enterprise_style')->where('styles_id', $this->id)->get();

    }

}
