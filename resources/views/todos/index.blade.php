@extends('layouts.app')

@section('content')

<h1 class="text-center">Todos</h1>
@if (count($todos) > 0)
    @foreach ($todos as $todo)
        <div class="shadow-sm p-4 mb-4 bg-white ">
        <h3> <a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
        <span class="badge badge-pill badge-danger ">{{$todo->due}}</span><hr>
        <p>{{$todo->body}}</p>
        </div>
        
    @endforeach
@endif
@endsection