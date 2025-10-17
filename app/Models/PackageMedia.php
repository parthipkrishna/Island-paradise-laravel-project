<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageMedia extends Model
{   use HasFactory, SoftDeletes;
    public $timestamps = true;

    protected $fillable = [
        'package_id',
        'package_detail_id',
        'media_url',
        'media_type',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }


    public function packageDetail()
    {
        return $this->belongsTo(PackageDetail::class);
    }
}
