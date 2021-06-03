<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProveedorInter extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tipo_medio',
        'razon_social',
        'representante',
        'cargo',
        'escritura',
        'objeto_social',
        'acreditacion_social',
        'INE',
        'fecha_sat',
        'RFC',
        'PPAPE',
        'domicilio',
        'Proveedores_col',



    ];

}
