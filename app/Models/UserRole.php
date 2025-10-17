<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'role_name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function permissions()
{
    return $this->hasMany(UserPermission::class);
}

}
