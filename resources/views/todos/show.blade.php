@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-primary">Go Back</a>
    <h1>{{$todo->text}}</h1>
@endsection