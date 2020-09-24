@extends('layout')

@section('content')
<h1>My Task list<h1>

<ul>
@foreach ($tasks as $task)
    <li><a href="{{ route('tasks.show', ['task' => $task['id']]) }}">#{{ $task['id'] }} - {{ $task['name'] }}</a></li>
@endforeach
</ul>
@endsection
