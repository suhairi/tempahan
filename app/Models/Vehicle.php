<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'driver_id'];

    public function driver(): BelongsTo
    {
        // return $this->belongsTo(Driver::class);
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    // public function carmodel(): BelongsTo 
    // {
    //     return $this->belongsTo(Carmodel::class);
    // }

    protected function name(): Attribute 
    {
        return Attribute::make(
            set: fn(string $value) => strtoupper($value),
            get: fn(string $value) => strtoupper($value),
        );
    }
}
