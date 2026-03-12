<h1>Todo App</h1>

<form method="POST" action="/tasks">
@csrf
<input type="text" name="title">
<button type="submit">追加</button>
</form>

<ul>
@foreach($tasks as $task)
<li>
{{ $task->title }}

<form method="POST" action="/tasks/{{ $task->id }}">
@csrf
@method('DELETE')
<button type="submit">削除</button>
</form>

</li>
@endforeach
</ul>