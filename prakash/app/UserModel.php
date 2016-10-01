<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public function role() {
        return $this->belongsToMany('App\User', 'user_roles', 'role_id', 'user_id');
    }

    public function inRole($role) {
        return (bool) $this->role()->where('name', '=', $role)->count();
    }
}
