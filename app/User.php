<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\amigo;
use App\Comic;
use App\Comiclist;
use App\Comentario;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function amigos()
    {
        return $this->belongsToMany(Amigo::class);
    }
    public function comics()
    {
        return $this->belongsToMany(Comics::class);
    }
    public function comiclists()
    {
        return $this->belongsToMany(ComicList::class);
    }
    public function comentarios()
    {
        return $this->belongsToMany(Comentario::class);
    }
}
