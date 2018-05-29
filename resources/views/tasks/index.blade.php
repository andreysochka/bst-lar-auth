@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Tasks</div>

                <div class="panel-body">
		    <div><a href="{{url(route('tasks.create'))}}">Add new Task</a> </div>
                    All Tasks will here
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
