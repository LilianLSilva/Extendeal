<?php

namespace Modules\Cuadro\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cuadro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'autor',
        'medidas',
        'tecnica',
        'material',
        'anio'
    ];

    protected $hidden = ['updated_at', 'created_at'];

    protected static function newFactory()
    {
        return \Modules\Cuadro\Database\factories\CuadroFactory::new();
    }
}
