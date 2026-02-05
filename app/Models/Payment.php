<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'contrat_id',
        'user_id',
        'amount',
        'payment_date',
        'payment_method',
        'phone',
        'status',
    ];

    protected $casts = [
        'payment_date' => 'datetime',
        'amount' => 'integer',
    ];
    public function contrat()
    {
        return $this->belongsTo(Contrat::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
