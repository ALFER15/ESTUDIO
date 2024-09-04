<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userPractica extends Model
{
    use HasFactory;

    protected $table = 'user_practicas'; // Especifica el nombre de la tabla
    protected $fillable = ['name', 'password', 'email', 'cell'];
}
