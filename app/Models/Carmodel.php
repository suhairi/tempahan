<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carmodel extends Model
{
    use HasFactory;

    public function carbrand(): BelongsTo
    {
        return $this->belongsTo(Carmodel::class);
    }

}
