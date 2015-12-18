@extends('admin.template.main')
@section('title', 'Login')

@section('content')
	Login Usuario
	{!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
		<div class="form-grup">
			{!! Form::label('email', 'Correo electronico')!!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::label('password', 'Contraseña')!!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*******', 'required'])!!}
		</div>
		<div class="form-grup">
			{!! Form::submit('Login', ['class' => 'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection