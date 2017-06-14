<?php

namespace App\Repositories;

use App\Resume;

class ResumeRepository
{
    public function create(array $attributes)
    {
        return Resume::create($attributes);
    }

    public function byId($id)
    {
        return Resume::find($id);
    }


    public function getAllResumes()
    {
        return Resume::all();
    }

    public function delete($id)
    {

    }

}