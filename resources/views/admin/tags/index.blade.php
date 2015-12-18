@extends('admin.template.main')
@section('title', 'Lista de tags')

@section('content')
	<a href="{{ route('admin.tags.create') }}" class="btn btn-info">Registrar nuevo tag</a>
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