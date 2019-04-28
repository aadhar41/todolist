@extends('layouts.app')

@section('content')
<br>
  <a class="btn btn-primary" href="/">Go Back</a>
  <br><br>
  <div class="shadow-sm p-4 mb-4 bg-white ">
    <h2><a href="/todo/{{$todo->id}}">{{$todo->text}}</a></h2>
      <div class="badge badge-pill badge-danger">{{$todo->due}}</div>
      <hr>
      <p>{{$todo->body}}</p>
      <a href="/todo/{{$todo->id}}/edit" class="btn btn-outline-primary">Edit</a>
      <br><br>
      {{ Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) }}
        
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete',['class'=>'btn btn-outline-danger']) }}

      {{ Form::close() }}
  </div>
@endsection
