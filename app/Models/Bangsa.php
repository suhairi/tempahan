<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bangsa extends Model
{
    use HasFactory;

    protected $connection = 'mysql_2';
    protected $table = 'bangsa';
    protected $primaryKey = 'kod_bangsa';

    protected $fillable = ['kod_bangsa', 'info_bangsa'];

    public function staff(): HasOne
    {
        return $this->hasOne(Staff::class);
    }
}
