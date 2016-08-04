<div>
    <form method="post" action="{{url('today-is-gift/postSubscriber')}}" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('name', 'Name:', ['class' => 'col-sm-3 control-label']) !!}
            {!! Form::email('email', old('email', NULL), ['class' => 'form-control']) !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
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