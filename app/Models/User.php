<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes; 

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    
    
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'password',
        'user_role',
        'profile_image',
        'status',
        'remember_token',
    ];

    // Relationship: A User belongs to a UserRole
    public function role()
    {
        return $this->belongsTo(UserRole::class);
    }

    public function bookings()
{
    return $this->hasMany(Booking::class);
}


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
