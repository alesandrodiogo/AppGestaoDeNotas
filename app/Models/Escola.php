<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Escola extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'director',
        'nif',
        'subsistema_id',
        'tipologia_id',
        'municipio_id',
        'provincia_id',
    ];

    public function subsistema() : BelongsTo
    {
        return $this->belongsTo(Subsistema::class);
    }

    public function tipologia() : BelongsTo
    {
        return $this->belongsTo(Tipologia::class);
    }

    public function municipio() : BelongsTo
    {
        return $this->belongsTo(Municipio::class);
    }

    public function provincia() : BelongsTo
    {
        return $this->belongsTo(Provincia::class);
    }
}
