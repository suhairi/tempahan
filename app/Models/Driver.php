<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'slug', 'phone', 'email', 'staffid', 'department', 'type'];

    public function vehicles(): HasMany
    {
        // return $this->hasMany(Vehicle::class);
        return $this->hasMany(Vehicle::class, 'driver_id');
    }

    protected function name(): Attribute 
    {
        return Attribute::make(
            set: fn(string $value) => strtoupper($value),
            get: fn(string $value) => strtoupper($value),
        );
    }

    protected function department(): Attribute 
    {
        return Attribute::make(
            set: fn(string $value) => strtoupper($value),
            get: fn(string $value) => strtoupper($value),
        );
    }

}
