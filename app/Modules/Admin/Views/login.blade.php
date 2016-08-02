@extends('layouts.admin_master', ['title' => 'Login', 'type' => 'login'])
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{ url('login') }}" method="POST"
                  class="form-horizontal">

                {{ csrf_field() }}

                <div class="form-group">
                    {!! Form::email('email', old('email', NULL), ['class' => 'form-control']) !!}
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#"
                   class="btn btn-block btn-social btn-facebook btn-flat"><i
                            class="fa fa-facebook"></i> Sign in using
                    Facebook</a>
                <a href="#"
                   class="btn btn-block btn-social btn-google btn-flat"><i
                            class="fa fa-google-plus"></i> Sign in using
                    Google+</a>
            </div>
            <!-- /.social-auth-links -->

            <a href="#">I forgot my password</a><br>
            <a href="register.html" class="text-center">Register a new
                membership</a>

        </div>
        <!-- /.login-box-body -->
    </div>
@endsection
@section('js')
    <script src="../plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
@endsection