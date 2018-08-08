<?php

namespace App\Modelos\web;

use Illuminate\Database\Eloquent\Model;

class Encuestador extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'apellido',
        'direccion',
        'telefono',
        'tipo',
        'email',
        'visible',
        'password',
        'empresa_id'
    ];

    public function empresa(){
        return $this->belongsTo('App\Modelos\web\Empresa');
    }
}
