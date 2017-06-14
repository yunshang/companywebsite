<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    protected $fillable = ['job', 'department', 'quantity','academic_requirements','work_area','content'];

}
