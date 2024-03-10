<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cartype extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function carmodel(): HasOne
    {
        return $this->hasOne(Carmodel::class);
    }
}
