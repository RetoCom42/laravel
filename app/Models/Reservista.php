<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservista extends Model
{
    use HasFactory;

    protected $fillable = [
        'Unidad', 'Plantilla', 'ESTADO', 'CARGO', 'GRADO', 'NOMBRE_Y_APELLIDOS', 'C_IDENTIDAD', 'MUNICIPIO', 'DIRECCION', 'TELEFONO', 'Preparado', 'Fecha_Preparado', 'Recorrido', 'Fecha_Recorrido', 'Causal', 'Observaciones'
    ];
}
