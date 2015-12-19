@extends('admin.template.main')
@section('title', 'Lista de usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
	<table class="table table-striped">
		<thead>
			<td>ID</td>
			<td>Nombre</td>
			<td>Correo</td>
			<td>Tipo</td>
			<td>Acción</td>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{!! $user->id !!}</td>
					<td>{!! $user->name !!}</td>
					<td>{!! $user->email !!}</td>
					@if($user->type == 'admin')
						<td>
							<span class="label label-danger">{!! $user->type !!}</span>
						</td>
					@else
						<td>
							<span class="label label-primary">{!! $user->type !!}</span>
						</td>
					@endif
					
					<td>
						<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
						<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
@endsection