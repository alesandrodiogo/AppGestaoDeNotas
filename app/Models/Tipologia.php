<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipologia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function escolas() : HasMany
    {
        return $this->hasMany(Escola::class);
    }
}
