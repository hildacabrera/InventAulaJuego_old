<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngresoMaterial extends Model
{
    use HasFactory;

    protected $table = 'ingreso';
    public $timestamps =false;
    protected $primaryKey = 'id';
}
