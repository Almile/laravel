<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //permite a manipulação em massa dos dados na aplicação
    protected $fillable = ['nome', 'email', 'password'];

}
