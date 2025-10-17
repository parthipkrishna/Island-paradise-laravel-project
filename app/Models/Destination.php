<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{   use HasFactory; 
    protected $fillable = [
        'name',
        'description',
        'location',
        'status',
        'image',
    ];

    public function destinationDetails()
    {
        return $this->hasMany(DestinationDetail::class);
    }

    public function designationMedia()
    {
        return $this->hasMany(DesignationMedia::class);
    }
}
