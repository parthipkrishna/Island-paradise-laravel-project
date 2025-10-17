<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'title',
        'price',
        'status',
        'image',
        'short_description',
        'locations'
    ];

    public function bookings()
{
    return $this->hasMany(Booking::class, 'package_id');
}

public function details()
{
    return $this->hasMany(PackageDetail::class);
}

public function media()
{
    return $this->hasMany(PackageMedia::class);
}
public function package()
{
    return $this->belongsTo(Package::class, 'package_id');
}



}
