<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Disciplina extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
    ];

    public function notas() : HasMany
    {
        return $this->hasMany(Nota::class);
    }
}
