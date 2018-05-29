@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Tasks</div>

                <div class="panel-body">
		    <div><a href="{{url(route('tasks.create'))}}">Add new Task</a> </div>
                    <!-- Текущие задачи -->
		    @if (count($tasks) > 0)
		    <div class="panel panel-default">
			<div class="panel-heading">
			    Текущая задача
			</div>

			<div class="panel-body">
			    <table class="table table-striped task-table">

				<!-- Заголовок таблицы -->
				<thead>
				<th>Task</th>
				<th>&nbsp;</th>
				</thead>

				<!-- Тело таблицы -->
				<tbody>
				    @foreach ($tasks as $task)
				    <tr>
					<!-- Имя задачи -->
					<td class="table-text">
					    <div>{{ $task->name }}</div>
					</td>

					<td>
					    <!-- TODO: Кнопка Удалить -->
					</td>
				    </tr>
				    @endforeach
				</tbody>
			    </table>
			</div>
		    </div>
		    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
