<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class amigo extends Model
{
    //
    public function users()
    {
        return $this->belongsTo(User::class,'mainuser_id');
    }
    public function friends()
    {
        return $this->belongsTo(User::class,'frienduser_id');
    }
}
