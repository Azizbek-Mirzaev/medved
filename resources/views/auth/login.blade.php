<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-default-danger">{{$error}}</div>
@endforeach
@endif
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Вход для авторизованных пользователей!</p>

      <form action="{{route('login')}}"
            method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control"
          name="email"
          placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"
          name="password"
          placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Запомнить
              </label>
            </div>
          </div>
          <!-- /.col -->

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Войти</button> <br>

          <a href="/" class="btn btn-danger">Отмена Назад</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <div class="row">
      <div class="col-8">
      <p class="mb-2">
        <a href="{{route('showRegisterForm')}}" class="text-center">Регистрация</a>
      </p>
      </div>
          </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
</body>
</html>


