<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tareasp extends Model
{
    use HasFactory;

    protected $table = 'tareas';
    protected $fillable = ['nombre', 'descripcion', 'estado'];

}