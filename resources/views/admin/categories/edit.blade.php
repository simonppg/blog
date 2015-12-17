@extends('admin.template.main')
@section('title', 'Editar categoría' . $category->name)

@section('content')
	Editar Categoría
	{!! Form::open(['route' => ['admin.categories.update', $category], 'method' => 'PUT']) !!}
		<div class="form-grup">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría', 'required'])!!}
		</div>

		<div class="form-grup">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection