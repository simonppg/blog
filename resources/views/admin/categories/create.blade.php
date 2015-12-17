@extends('admin.template.main')
@section('title', 'Crear categoría')

@section('content')
	{!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST']) !!}
		<div class="form-grup">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría', 'required'])!!}
		</div>

		<div class="form-grup">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection