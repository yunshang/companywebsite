<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    protected $table = 'imgs';
    protected $fillable = ['filepath','description','styles', 'styles_id'];

}
