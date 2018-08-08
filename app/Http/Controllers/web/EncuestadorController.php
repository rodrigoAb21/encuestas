<?php

namespace App\Http\Controllers\web;

use App\Modelos\web\Encuestador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EncuestadorController extends Controller
{
    public function index(Request $request){
        if($request){
            $textoBusqueda = trim($request -> textoBusqueda);
            $encuestadores = DB::table('users')
                -> select('users.id', 'users.name', 'users.apellido', 'users.email', 'users.telefono')
                -> where('users.apellido','LIKE', '%'.$textoBusqueda.'%')
                -> where('users.visible','=','1')
                -> where('users.tipo','=','encuestador')
                -> where('users.empresa_id','=', Auth::user()-> empresa_id)
                -> paginate(10);

        }

        return view('admin.encuestadores.index', ['encuestadores' => $encuestadores, 'textoBusqueda' => $textoBusqueda]);
    }

    public function create(){
        return view('admin.encuestadores.create');
    }

    public function store(Request $request){
        $encuestador = new Encuestador();
        $encuestador -> name = $request -> name;
        $encuestador -> apellido = $request -> apellido;
        $encuestador -> direccion = $request -> direccion;
        $encuestador -> telefono = $request -> telefono;
        $encuestador -> email = $request -> email;
        $encuestador -> password =  bcrypt($request -> password);
        $encuestador -> tipo = 'encuestador';
        $encuestador -> visible = '1';
        $encuestador -> empresa_id = Auth::user()->empresa_id;
        $encuestador -> save();

        return redirect('encuestadores');
    }

    public function edit($id){
        $encuestador = Encuestador::findOrFail($id);
        return view('admin.encuestadores.edit', ['encuestador' => $encuestador]);
    }


    public function update($id, Request $request){
        $encuestador = Encuestador::findOrFail($id);
        $encuestador -> name = $request -> name;
        $encuestador -> apellido = $request -> apellido;
        $encuestador -> direccion = $request -> direccion;
        $encuestador -> telefono = $request -> telefono;
        $encuestador -> email = $request -> email;
        if (trim($request -> password) != ""){
            $encuestador -> password =  bcrypt($request -> password);
        }
        $encuestador -> update();

        return redirect('encuestadores');
    }

    public function destroy($id){
        $encuestador = Encuestador::findOrFail($id);
        $encuestador -> visible = '0';
        $encuestador -> update();

        return redirect('encuestadores');
    }
}
