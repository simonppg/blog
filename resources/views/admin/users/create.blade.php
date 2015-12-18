@extends('admin.template.main')
@section('title', 'Crear usuario')

@section('content')
	Crear Usuario
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
		<div class="form-grup">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required'])!!}
		</div>

		<div class="form-grup">
			{!! Form::label('email', 'Correo electronico')!!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('password', 'Contraseña')!!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*******', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('type', 'Tipo')!!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción ...', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection