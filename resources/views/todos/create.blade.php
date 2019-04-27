@extends('layouts.app')

@section('content')
    <h1>Create Todo  </h1>
    {{ Form::open(['url' => 'foo/bar']) }}
	//
    {{ Form::close() }}
@endsection