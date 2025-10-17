<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{   use HasFactory, SoftDeletes;
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'package_id',
        'status',
        'subject',
        'note',
        'number_of_days',
        'start_date',
        'end_date',
        'booking_type',
        'travelers_count',
        'no_of_rooms',
        'no_of_adults',
        'no_of_child_6_11',
        'no_of_child_11_above',
        'permit_status',
        'permit_application_no',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
