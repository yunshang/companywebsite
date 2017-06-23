<?php


namespace App\Repositories\Admin;

use App\Entry;

class EntryRepository
{
    public function getAllEntries()
    {
        return Entry::all();
    }

    public function Entry(array $attributes)
    {
        return Entry::create($attributes);
    }

    public function byId($id)
    {
        return Entry::find($id);
    }

    public function delete($id)
    {

    }
}
