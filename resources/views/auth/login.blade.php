@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ url('login') }}" method="POST"
              class="form-horizontal">

        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label for="task"
                       class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('remember', 'Remember', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::checkbox('remember', old('remember'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Login
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection