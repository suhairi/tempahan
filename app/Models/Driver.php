<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'staffid', 'email', 'phone', 'type', 'bahagian_id'];

    public function bahagian(): BelongsTo
    {
        return $this->belongsTo(Bahagian::class);
    }

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
}
