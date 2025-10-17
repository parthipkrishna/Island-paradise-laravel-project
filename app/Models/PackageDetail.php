<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageDetail extends Model
{   use HasFactory, SoftDeletes; 
    public $timestamps = true;

   

    protected $fillable = [
        'package_id',
        'description',
        'inclusion',
        'exclusion',
        'note',
    ];

    // Relationship with Package
    public function package()
    {
        return $this->belongsTo(Package::class ,'package_id');
    }

    public function media()
{
    return $this->hasMany(PackageMedia::class);
}

}
