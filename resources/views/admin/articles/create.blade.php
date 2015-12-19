@extends('admin.template.main')
@section('title', 'Crear articulo')

@section('content')
	Crear articulo
	{!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}
		<div class="form-grup">
			{!! Form::label('title', 'Titulo')!!}
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('category_id', 'Categoría')!!}
			{!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('content', 'Contenido')!!}
			{!! Form::textarea('content', null, ['class' => 'form-control', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('tags', 'Tags')!!}
			{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple', 'required'])!!}
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

@section('js')
	<script type="text/javascript">
	$(".select-tag").chosen({
		placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
		max_selected_options: 3,
		search_contains: true,
		no_results_text: "Oops, no se encontro!",
		allow_single_deselect: true
	});
	$(".select-category").chosen({
		placeholder_text_multiple: 'Seleccione una cateforía',
		max_selected_options: 3,
		search_contains: true,
		no_results_text: "Oops, no se encontro!",
		allow_single_deselect: true
	});
	</script>
@endsection