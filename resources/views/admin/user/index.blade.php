@extends('layouts.app')

@section('content')

<div class="container">
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach ($users as $key=>$user)

			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->phone }}</td>
				<td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-xs">Edit</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection


