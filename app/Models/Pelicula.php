<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{

    protected $fillable = ['nombre','director','genero','artista1','artista2'];
    use HasFactory;
}
