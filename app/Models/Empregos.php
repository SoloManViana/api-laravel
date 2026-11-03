<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empregos extends Model
{
    protected $table = 'empregos';

    protected $fillable = ['cargo', 'salario'];
}
