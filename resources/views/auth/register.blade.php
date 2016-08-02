@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ url('user/postRegister') }}" method="POST"
              class="form-horizontal">

        {{ csrf_field() }}

            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'Name:', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', 'Email:', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="task"
                       class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="task"
                       class="col-sm-3 control-label">Password Confirmation</label>
                <div class="col-sm-6">
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Create User
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection