<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinationDetail extends Model
{
    protected $fillable = [
        'destination_id',
        'description',
        'feature',
    ];

    // Define the inverse of the relationship (Destination has many DestinationDetails)
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
