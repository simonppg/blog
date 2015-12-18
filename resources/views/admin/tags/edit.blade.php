@extends('admin.template.main')
@section('title', 'Editar tag' . $tag->name)

@section('content')
	Editar Tag
	{!! Form::open(['route' => ['admin.tags.update', $tag], 'method' => 'PUT']) !!}
		<div class="form-grup">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', $tag->name, ['class' => 'form-control', 'placeholder' => 'nombre completo', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection