@include('admin.layouts.header')
@include('admin.layouts.session')
@include('admin.layouts.errors')


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('dashboard') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('dashboard') }}/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('dashboard') }}/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('dashboard') }}/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('dashboard') }}/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <div class="register-box-body">
        <p class="login-box-msg">{{ trans('site.yourInfo') }}</p>

        <form  method="post">

            {{ csrf_field() }}

            <div class="form-group has-feedback">
                <input type="email" name="email" value="{{ old('email') }}"  class="form-control" placeholder="{{ trans('site.email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" name="password"  value="{{ old('password') }}" class="form-control" placeholder="{{ trans('site.password') }}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">

                <!-- /.col -->
                <div class="col-xs-4">
                    <button style="margin-bottom: 13px" type="submit" class="btn btn-primary btn-block btn-flat">
                        {{ trans('site.login') }}
                    </button>
                </div>
                <!-- /.col -->
            </div>
        </form>


        <a  href="{{ route('admin.register') }}" class="text-center">{{ trans('site.newAccPlz') }}</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="{{ url('dashboard') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('dashboard') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ url('dashboard') }}/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
