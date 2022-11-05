<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criptomoneda extends Model
{
    use HasFactory;
    protected $fillable = [
        'logotipo', 
        'nombre',
        'descripcion',
        'lenguaje_id',
        'fecha_creacion',
        'precio',
          ];    
}
