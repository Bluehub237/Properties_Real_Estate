<?php

namespace App\Models;

use App\Models\Visit;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'price',
        'deposit',
        'months',
        'status',
        'photos',
        'video',
        'address',
        'city',
        'neighborhood',
        'lot_size',
        'rooms',
        'bedrooms',
        'bathrooms',
        'floors',
        'amenities',
        'user_id',
    ];
    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'price' => 'decimal:2',
        'deposit' => 'decimal:2',
        'lot_size' => 'decimal:2',
        'photos' => 'array',
        'amenities' => 'array'
    ];
}
