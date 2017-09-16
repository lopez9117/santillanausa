@extends('layout')

@section('contenido')
	<h1>Usuarios</h1>

	<table class="table">
		<thead>
				
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Rol</th>
					<th>Acciones</th>
				</tr>
		</thead>
		<tbody>
			@foreach( $users as $user)
				
				<tr>
					<th>{{$user->id}}</th>
					<th>{{$user->name}}</th>
					<th>{{$user->email}}</th>
					<th>{{$user->role}}</th>
					<th></th>
				</tr>
			@endforeach			

		</tbody>


	</table>
@stop