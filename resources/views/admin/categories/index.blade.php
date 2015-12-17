@extends('admin.template.main')
@section('title', 'Lista de usuarios')

@section('content')
	<a href="{{ route('admin.categories.create') }}" class="btn btn-info">Registrar nueva categoría</a>
	<table class="table table-striped">
		<thead>
			<td>ID</td>
			<td>Nombre</td>
		</thead>
		<tbody>
			@foreach($categories as $user)
				<tr>
					<td>{!! $user->id !!}</td>
					<td>{!! $user->name !!}</td>
					
					<td>
						<a href="{{ route('admin.categories.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
						<a href="{{ route('admin.categories.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $categories->render() !!}
@endsection