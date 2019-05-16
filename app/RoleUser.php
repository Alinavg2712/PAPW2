<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Role;
class RoleUser extends Model
{
    //
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','role_user');
    }
    public function roles()
    {
        return $this->belongsTo(Role::class,'role_id','role_user');
    }
}
