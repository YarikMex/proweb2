<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;
 
        protected $primaryKey = 'idPuesto'; // Usar 'idPuesto' como la clave primaria
        public $incrementing = true; // Definir que es autoincremental
        protected $keyType = 'int'; // El tipo de clave primaria es integer
    
    
    protected $fillable = ['nombrePuesto','tipoPuesto'];
}
