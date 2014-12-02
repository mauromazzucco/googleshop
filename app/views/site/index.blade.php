@extends('layout.application')
@section('title', 'Home')
@section('content')
<h1>Create new Site</h1>
	{{Form::open()}}
		{{Form::label('site', "Cadastre o Site: ")}}
		{{Form::text('site')}}
		{{Form::submit('Enviar')}}
	{{Form::close()}}
@stop