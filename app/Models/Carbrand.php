<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carbrand extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    // protected $guarded = [];

    protected function name(): Attribute 
    {
        return Attribute::make(
            set: fn(string $value) => strtoupper($value),
            get: fn(string $value) => strtoupper($value),
        );
    }

    public function carmodel(): HasMany
    {
        return $this->hasMany(Carmodel::class);
    }

    public function cartype(): HasMany
    {
        return $this->hasMany(Cartype::class);
    }

    
}
