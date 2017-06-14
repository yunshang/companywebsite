<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = 'resumes';
    protected $fillable = ['name','gender','phone','age','years_work','apply_job','office_status','education_level',
                           'expect_workplace','induction_time','educational_experience',
                            'work_experience','self_evaluation','annex'];

}
