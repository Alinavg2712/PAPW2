<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comic;
class Categoria extends Model
{
    //
    public function comics()
    {
        return $this->belongsToMany(Comic::class);
    }
   
}
