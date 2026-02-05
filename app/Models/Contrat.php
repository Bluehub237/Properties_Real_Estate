<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $fillable = [
        'contrat_number', 'property_id', 'tenant_id', 'owner_id', 'start_date', 'end_date', 'amount',
        'deposit', 'terms', 'status', 'owner_signature', 'tenant_signature',
        'signed_at', 'pdf_path'
    ];
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'amount' => 'decimal:2',
        'deposit' => 'decimal:2',
        'signed_at' => 'datetime',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function tenant()
    {
        return $this->belongsTo(User::class, 'tenant_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($contract) {
            $contract->reference = 'CTR-' . date('Y') . '-' . str_pad(static::max('id') + 1, 5, '0', STR_PAD_LEFT);
        });
    }

    public function isSigned()
    {
        return !is_null($this->tenant_signature) && !is_null($this->owner_signature);
    }

    public function isExpired()
    {
        return $this->end_date && $this->end_date->isPast();
    }
}
