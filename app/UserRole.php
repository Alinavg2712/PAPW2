<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Role;
class UserRole extends Model
{
    //
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function roles()
    {
        return $this->belongsTo(Role::class,'role_id');
    }
}
