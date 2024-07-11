<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aluno extends Model
{
    use HasFactory;

    protected $dates = ['data_nascimento'];

    public function turma() : BelongsTo
    {
        return $this->belongsTo(Turma::class);
    }

    public function sala() : BelongsTo
    {
        return $this->belongsTo(Sala::class);
    }

    public function notas(): HasMany
    {
        return $this->hasMany(Nota::class);
    }
}
