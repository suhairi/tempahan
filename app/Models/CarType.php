<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarType extends Model
{
    use HasFactory;

    public function carmodel(): BelongsTo
    {
        return $this->belongsTo(Cartype::class);
    }
}
