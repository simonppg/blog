@extends('admin.template.main')
@section('title', 'Lista de articulos')

@section('content')
	<a href="{{ route('admin.articles.create') }}" class="btn btn-info">Registrar nuevo articulo</a>
	<!-- Buscador de Articles -->
	{!! Form::open([ 'route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right' ]) !!}
		<div class="input-group">
		{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar articulo...', 'required'])!!}
			<span class="input-group-addon" id="search">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			</span>
		</div>
	{!! Form::close() !!}
	<!-- Fin de buscador de Articles -->
	<table class="table table-striped">
		<thead>
			<td>ID</td>
			<td>Titulo</td>
			<td>Categoría</td>
			<td>Usuario</td>
			<td>Acción</td>
		</thead>
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td>{!! $article->id !!}</td>
					<td>{!! $article->title !!}</td>
					<td>{!! $article->category->name !!}</td>
					<td>{!! $article->user->name !!}</td>
					
					<td>
						<a href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
						<a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $articles->render() !!}
@endsection