<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterpriseStyle extends Model
{
    protected $table = 'enterprise_styles';
    protected $fillable = ['title','subtitle'];

}
