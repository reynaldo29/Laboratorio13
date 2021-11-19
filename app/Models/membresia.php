<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membresia extends Model
{
    public $table = "membresia";
    protected $fillable = ['usuarioid','fecha_expedicion','fecha_expiracion'];
    use HasFactory;

}
