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
    'fecha_nacimiento',
    'nombres',
    'apellidos',
    'sexo',
    'genero',
    'grupo_sanguineo',
    'etnia',
    'poblacion_especial',
    'telefono',
    'entidad',
    'direccion'];
}

