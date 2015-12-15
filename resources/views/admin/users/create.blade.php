@extends('admin.template.main')
@section('title', 'Crear usuario')

@section('content')
	create users
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
		<div class="form-grup">
			{!! Form::label('name', 'nombre')!!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nombre completo', 'required'])!!}
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
			{!! Form::select('type', ['' => 'Seleccione un nivel...', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control'])!!}
		</div>
		<div class="form-grup">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection