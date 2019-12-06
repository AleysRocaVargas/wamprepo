<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;
use App\modelos\acudientes;

class usuarios extends Model
{
    //
    protected $table = "usuarios";

    protected $fillable = [
        "NOMBRE",
        "EMAIL",
        "PASSWORD"
    ];

    public function acudientes(){
        return $this->hasMany(acudientes::class);
    }
}
