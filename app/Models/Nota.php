<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nota extends Model
{
    use HasFactory;

    public function aluno() : BelongsTo
    {
        return $this->belongsTo(Aluno::class);
    }

    public function anoLectivo() : BelongsTo
    {
        return $this->belongsTo(AnoLectivo::class);
    }

    public function disciplina() : BelongsTo
    {
        return $this->belongsTo(Disciplina::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($nota) {
            $nota->mfd = ($nota->mt1 + $nota->mt2 + $nota->mt3) / 3;
            $nota->mt = ($nota->mac + $nota->npp + $nota->npt) / 3;
        });
    }
}
