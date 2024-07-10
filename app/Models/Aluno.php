<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
