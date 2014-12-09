@extends('layout.application')
@section('title', 'Home')
@section('content')
<h1>Cadastre o site</h1>
	{{Form::open()}}
		{{Form::label('site', "Cadastre o Site: ")}}
		{{Form::text('site')}}
		{{Form::submit('Enviar')}}
	{{Form::close()}}
	{{$errors->first('site')}}
@stop