<?php

namespace App\Http\Controllers\web;

use App\Modelos\web\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpresaController extends Controller
{
    public function edit($id){
        $empresa = Empresa::findOrFail($id);
        return view('admin.empresa.edit',['empresa' => $empresa]);
    }

    public function update($id, Request $request){
        $empresa = Empresa::findOrFail($id);
        $empresa -> nombre = $request -> nombre;
        $empresa -> direccion = $request -> direccion;
        $empresa -> telefono = $request -> telefono;
        $empresa -> email = $request -> email;
        $empresa -> update();

        return redirect('/');

    }
}
