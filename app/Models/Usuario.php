<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    //Permite com que adicionemos dados em massa
    protected $fillable = [
        'name',
        'email'
    ];
}
