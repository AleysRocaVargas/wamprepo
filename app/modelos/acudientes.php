<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;
use App\modelos\usuarios;

class acudientes extends Model
{
    //
    protected $table = "acudientes";
    protected $fillable = [
        "EMAIL",
        "ACUDIENTE_DE"
    ];

    public function usuario(){
        return $this->belongsTo(usuarios::class,'ACUDIENTE_DE');
    }
}
