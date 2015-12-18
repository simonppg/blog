@extends('admin.template.main')
@section('title', 'Crear tag')

@section('content')
	Crear tag
	{!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}
		<div class="form-grup">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del tag', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection