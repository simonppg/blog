@extends('admin.template.main')
@section('title', 'Lista de tags')

@section('content')
	<a href="{{ route('admin.tags.create') }}" class="btn btn-info">Registrar nuevo tag</a>
	<!-- Buscador de Tags -->
	{!! Form::open([ 'route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right' ]) !!}
		<div class="input-group">
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag...', 'required'])!!}
			<span class="input-group-addon" id="search">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			</span>
		</div>
	{!! Form::close() !!}
	<!-- Fin de buscador de Tags -->
	<hr>
	<table class="table table-striped">
		<thead>
			<td>ID</td>
			<td>Nombre</td>
			<td>Acción</td>
		</thead>
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td>{!! $tag->id !!}</td>
					<td>{!! $tag->name !!}</td>					
					<td>
						<a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"></a>
						<a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning"></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $tags->render() !!}
@endsection