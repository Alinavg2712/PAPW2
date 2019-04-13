<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\User;

class Comic extends Model
{
    //
    /*
    public function users(){
        return $this->hasMany(User::class);
    }*/
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
    
}
