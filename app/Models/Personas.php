<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    protected $fillable = [
    'id',
    'identificacion',
    'apellido1',
    'apellido2',
    'nombre1',
    'nombre2',
    'sexo',
    'fecha_nacimiento',
    'grupo_sanguineo',
    'genero',  
    'etnia',
    'poblacion_especial',
    'telefono',
    'entidad',
    'direccion'];
}

