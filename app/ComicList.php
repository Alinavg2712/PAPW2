<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comic;
class ComicList extends Model
{
    //
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function comics()
    {
        return $this->belongsTo(Comic::class,'comic_id');
    }
}
