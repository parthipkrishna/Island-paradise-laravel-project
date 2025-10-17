<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    protected $fillable = [
        'role_id',
        'permission',
    ];

  
    public function role()
    {
        return $this->belongsTo(UserRole::class);
    }
}
