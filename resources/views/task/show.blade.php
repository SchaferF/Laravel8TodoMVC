@extends('layout')

@section('content')
<h1>Task #{{ $task.id }} detail</h1>

<p><b>Name : </b>{{ $task.name }}</p>

@endsection
