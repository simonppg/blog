@extends('admin.template.main')
@section('title', 'Editar usuario' . $user->name)

@section('content')
	Editar Usuario
	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
		<div class="form-grup">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'nombre completo', 'required'])!!}
		</div>

		<div class="form-grup">
			{!! Form::label('email', 'Correo electronico')!!}
			{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('password', 'Contraseña')!!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*******', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('type', 'Tipo')!!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control'])!!}
		</div>
		<div class="form-grup">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection