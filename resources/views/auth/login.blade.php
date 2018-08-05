<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Distribuidos</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('plantilla/dist/css/login.css')}}">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('plantilla/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plantilla/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Icono -->
    <link rel="shortcut icon" href="{{asset('plantilla/dist/img/logo.png')}}" type="image/x-icon">

</head>
<body class="hold-transition login-page" style="font-family: 'Tahoma'">
@if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="login-box">
    <div class="login-logo">
        <h1>Distribuidos</h1>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <h4 class="login-box-msg">LOGIN</h4>

        <form method="POST" action="{{ route('login') }}" autocomplete="off">
            {{ csrf_field() }}
            <div class="form-group form-group-lg has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group  form-group-lg has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password" required>

            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Iniciar Sesion</button>
                </div>
                <!-- /.col -->
            </div>

            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12" style="padding-top: 0.5em">
                    <a class="enlace" href="{{url('register')}}"><button type="button" class="btn btn-light btn-block btn-lg">Registrarse</button></a>
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

