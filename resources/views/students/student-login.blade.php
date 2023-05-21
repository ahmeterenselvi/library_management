<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Öğrenci Girişi</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-master/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-master/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1><b>Öğrenci Girişi</b></h1>
        </div>
        <div class="card-body">

            <form action="{{ route('student.login.submit') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 60px;">Email</span>
                    <input type="email" class="form-control" name="email" placeholder="Email...">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 60px;">Şifre</span>
                    <input type="password" class="form-control" name="password" placeholder="Şifre...">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @if ($errors->has('email'))
                    <div class="alert alert-danger">Giriş bilgileri yanlış.</div>
                @endif
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <br>
            <div class="text-center">
                <p><a href="{{ route('student.register') }}">Kayıt olmak için tıklayınız</a></p>
            </div>
            <div class="text-center">
                <p><a href="{{ route('admin.login') }}">Admin girişi için tıklayınız</a></p>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('/AdminLTE-master/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/AdminLTE-master/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
