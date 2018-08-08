<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Distribuidos | Registro</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('plantilla/dist/css/login.css')}}">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('plantilla/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plantilla/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- icono -->
    <link rel="shortcut icon" href="{{asset('plantilla/dist/img/logo.png')}}" type="image/x-icon">

</head>
<body class="hold-transition login-page" style="font-family: Tahoma, Verdana, Arial, sans-serif">
@if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="register-box">
    <div class="login-logo">
        <h1>REGISTRO</h1>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

        <form method="POST" action="{{ route('register') }}" autocomplete="off">
            {{ csrf_field() }}

            <h3 class="login-box-msg">Datos de la Empresa</h3>

            <div class="form-group form-group-lg">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre_empresa" value="{{ old('nombre_empresa') }}" required autofocus>
            </div>

            <div class="form-group  form-group-lg">
                <input type="text" class="form-control" placeholder="Direccion" name="direccion_empresa" value="{{ old('direccion_empresa') }}" required>
            </div>

            <div class="form-group form-group-lg">
                <input type="number" class="form-control" placeholder="Telefono" name="telefono_empresa" value="{{ old('telefono_empresa') }}" >
            </div>

            <div class="form-group form-group-lg">
                <input type="email" class="form-control" placeholder="Email" name="email_empresa" value="{{ old('email_empresa') }}" >
            </div>

            <h3 class="login-box-msg">Datos del Usuario</h3>

            <div class="form-group form-group-lg">
                <input type="text" class="form-control" placeholder="Nombres" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group form-group-lg">
                <input type="text" class="form-control" placeholder="Apellidos" name="apellido" value="{{ old('apellido') }}" required>
            </div>

            <div class="form-group  form-group-lg">
                <input type="text" class="form-control" placeholder="Direccion" name="direccion" value="{{ old('direccion') }}" required>
            </div>

            <div class="form-group form-group-lg">
                <input type="number" class="form-control" placeholder="Telefono" name="telefono" value="{{ old('telefono') }}" required >
            </div>

            <div class="form-group form-group-lg">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required >
            </div>

            <div class="form-group  form-group-lg">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>

            <div class="form-group form-group-lg">
                <input id="password-confirm" placeholder="Repite el Password" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Guardar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('plantilla/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('plantilla/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>

