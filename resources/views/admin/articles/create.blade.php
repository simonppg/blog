@extends('admin.template.main')
@section('title', 'Crear Articulo')

@section('content')
	Crear Article
	{!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}
		<div class="form-grup">
			{!! Form::label('title', 'Titulo')!!}
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('category_id', 'Categoría')!!}
			{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción ...', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('content', 'Contenido')!!}
			{!! Form::textarea('content', null, ['class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('tags', 'Tags')!!}
			{!! Form::select('tags', $tags, null, ['class' => 'form-control', 'multiple', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('image', 'Imagen')!!}
			{!! Form::file('image')!!}
		</div>
		<div class="form-grup">
			{!! Form::submit('Agregar articulo', ['class' => 'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection