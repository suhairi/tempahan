<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Jawatan extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'jawatans';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'name'];

    public function staff(): HasOne
    {
        return $this->hasOne(Staff::class);
    }
}
