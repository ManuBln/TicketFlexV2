<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras'; //Nombre de la tabla en la base de datos

    protected $fillable = [ //Campos que se pueden modificar y/o insertar datos masivamente
        'precio',
        'metodo_pago',
        'estado',
        'usuario_id',
    ];

    // ------------------------------------------Relaciones------------------------------------------

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function articulos()
    {
        return $this->belongsToMany(Articulo::class, 'detalle_compras', 'compra_id', 'articulo_id')->withPivot('cantidad');
    }
}
