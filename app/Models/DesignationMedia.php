<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DesignationMedia extends Model

{
    use HasFactory, SoftDeletes; 
    protected $fillable = [
        'destination_id',
        'destination_detail_id',
        'image_url',
        'image_type',
    ];

    // Define the inverse relationship with Destination
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    // Define the inverse relationship with DestinationDetail
    public function destinationDetail()
    {
        return $this->belongsTo(DestinationDetail::class);
    }
}
