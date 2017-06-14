<?php


namespace App\Repositories\Admin;


use App\Position;

class PositionRepository
{
    public function byId($id)
    {
        return Position::find($id);
    }

    public function getAllPositions()
    {
        return Position::all();
    }

    public function Position(array $attributes)
    {
        return Position::create($attributes);
    }
}