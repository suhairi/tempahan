<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Carmodel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cartype_id', 'carbrand_id'];

    protected function name(): Attribute 
    {
        return Attribute::make(
            set: fn(string $value) => strtoupper($value),
            get: fn(string $value) => strtoupper($value),
        );
    }

    public function carbrand(): BelongsTo
    {
        return $this->belongsTo(Carmodel::class);
    }

    public function cartype(): BelongsTo
    {
        return $this->belongsTo(Cartype::class);
    }

}
