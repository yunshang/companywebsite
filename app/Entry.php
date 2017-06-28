<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Img;

class Entry extends Model
{
    protected $table = 'entries';
    protected $fillable = ['title','content'];

    public function getallimg()
    {
        return Img::where('styles', 'entry')->where('styles_id', $this->id)->get();

    }

}
