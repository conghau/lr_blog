@extends('layouts.app',['body_class' => 'hold-transition skin-blue sidebar-mini'])
@section('content')
    <div class="box">
        <div class="box-header with-border"></div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Content</th>
                </tr>
                </thead>
                <tbody>
                @foreach($stories as $story)
                    <tr>
                        <td>{{$story->id}}</td>
                        <td>{{$story->tag}}</td>
                        <td>{{$story->content}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="box-footer clearfix">
            {{$stories->links()}}
        </div>
    </div>
<div>
    @include('widgets.subscriber_story')
</div>
@endsection