@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Editar: {{$encuestador -> name}} {{$encuestador -> apellido}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form method="POST" action="{{ url('encuestadores/'.$encuestador->id) }}" autocomplete="off">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="name">Nombres</label>
                                <input type="text" name="name" class="form-control" value="{{$encuestador -> name}}" required >
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="apellid">Apellidos</label>
                                <input type="text" name="apellido" class="form-control" value="{{$encuestador -> apellido}}" required >
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="direccion">Direccion</label>
                                <input type="text" name="direccion" class="form-control" value="{{$encuestador -> direccion}}" required >
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="number" name="telefono" class="form-control" value="{{$encuestador -> telefono}}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{$encuestador -> email}}" required >
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" >
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
