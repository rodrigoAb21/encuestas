@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Gestionar Encuestadores</h3> <a href="{{url('encuestadores/create')}}"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a>

                    <div class="box-tools">
                        <form action="{{url('encuestadores')}}" method="GET" autocomplete="off" role="search" >
                            {{csrf_field()}}
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input type="text" name="textoBusqueda" class="form-control pull-right" placeholder="Buscar por apellido" value="{{$textoBusqueda}}">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>Nro</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Opciones</th>
                        </tr>
                        @foreach($encuestadores as $encuestador)
                            <tr>
                                <td>{{ $loop -> iteration }}</td>
                                <td>{{ $encuestador -> name }}</td>
                                <td>{{ $encuestador -> apellido }}</td>
                                <td>{{ $encuestador -> email }}</td>
                                <td>{{ $encuestador -> telefono }}</td>
                                <td>
                                    <a href="{{url('encuestadores/'.$encuestador -> id.'/edit')}}"><button class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal-{{$encuestador->id}}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    @include('admin.encuestadores.modal')
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
