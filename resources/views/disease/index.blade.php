@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<table class="table">
				<thead>
					<!-- <th>ID</th> -->
					<th>Name</th>
				<!-- <th>Name Vi</th>
				<th>Description</th>
				<th>Action</th> -->
			</thead>
			<tbody>
				@foreach ($diseases as $key=>$disease)

				<tr>
					<!-- <td>{{ $disease->id }}</td> -->
					<td><a href="{{ route('disease.ajax.getDetail', $disease->id) }}"
						onclick="getDetail(this); return false;" 
						>
						{{ $disease->name_en }}
					</a>
				</td>
					<!-- <td>{{ $disease->name_vi }}</td>
					<td>{{ $disease->description_vi }}</td>
					<td><a href="{{ route('disease.edit', $disease->id )}}" class="btn btn-warning btn-xs">Edit</a></td> -->
				</tr>
				@endforeach
			</tbody>
		</table>

		{{ $diseases->links() }}
	</div>
	<div class="col-md-8" id="detail"></div>
</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	function getDetail(index) {
		var url = $(index).attr('href');
		$.ajax({
			url : url,
		}).done(function (response) {
			$('#detail').empty();
			$('#detail').append(response);
		});
	}
</script>
@endsection