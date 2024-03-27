<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodSample extends Model
{
    protected $table = 'muestras_alimentos';
    protected $fillable = [
        'id_orden',
        'numero_muestra',
        'tipo_muestra',
        'caracteristicas',
        'muestreador',
        'fecha_muestreo',
        'hora_muestreo',
        'tipo_muestreo',
        'parametros',
        'otros_parametros',
        'identificacion_muestra',
        'peso_muestra',
        'temperatura',
        'incertidumbres',
        'latitud',
        'longitud',
    ];
    public $timestamps = false;
    use HasFactory;

    public function orden ()
    {
        return $this->belongsTo(Order::class, 'id_orden');
    }
}
