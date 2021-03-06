@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->

        <!-- New Task Form -->
        <form action="{{ url('user/store') }}" method="POST"
              class="form-horizontal">

        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                {!! Form::label('name', 'Name:', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email:', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label for="task"
                       class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control">
                    <input type="password" name="password" disabled
                           class="form-control" style="display: none;">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:', ['class' => 'col-sm-3 control-label']) !!}
                {!! Form::textarea('description', NULL, ['class' => 'form-control']) !!}
            </div>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Create User
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection