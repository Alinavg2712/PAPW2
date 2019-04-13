<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class amigo extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany(User::class,'amigos','mainuser_id');
    }
    public function friends()
    {
        return $this->belongsToMany(User::class,'amigos','frienduser_id');
    }
}
