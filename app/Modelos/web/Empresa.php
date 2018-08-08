<?php

namespace App\Modelos\web;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email'
    ];

    public function encuestadores(){
        return $this->hasMany('App\Modelos\web\Enuestador');
    }
}
