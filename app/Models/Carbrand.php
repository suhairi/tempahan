<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carbrand extends Model
{
    use HasFactory;

    public function carmodels(): HasMany
    {
        return $this->hasMany(Carmodel::class);
    }
}
