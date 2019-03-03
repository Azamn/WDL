<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/dist/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/admin/dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="apple-touch-icon" sizes="57x57" href="/admin/dist/fav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/admin/dist/fav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/admin/dist/fav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/admin/dist/fav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/admin/dist/fav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/admin/dist/fav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/admin/dist/fav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/admin/dist/fav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/admin/dist/fav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/admin/dist/fav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/admin/dist/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/admin/dist/fav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/admin/dist/fav/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/admin/dist/fav/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Programmers Club</b></a>
  </div>
  @if(Session::has('success'))
    <div class="alert alert-success alert-success" id="flash">
        {{ strtoupper(Session::get('success'))  }}
    </div>
  @elseif(Session::has('error'))   
    <div class="alert alert-danger alert-error" id="flash">
        {{ strtoupper (Session::get('error'))  }}
    </div>   
  @endif
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    {!! Form::open(array('url'=>'/access/root/login','id' => 'login' , 'data-toggle' => 'validator' , 'role' => 'form')) !!}
      <div class="form-group has-feedback">
        <input type="text" name="email" class="form-control" placeholder="Email" required="" autocomplete="off" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <input type="password" name="password" class="form-control" placeholder="Password" required="" autocomplete="off" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    {!! Form::close() !!}
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script type="text/javascript">
  $(document).ready( function() {
      $('#flash').delay(2000).fadeOut();
    });
</script>
</body>
</html>
