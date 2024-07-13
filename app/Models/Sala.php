<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sala extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];


    public function aluno() : HasOne
    {
        return $this->hasOne(Aluno::class);
    }
}
