<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
</head>
<body>
	
	
	
	<div class="wrap-table shadow">
	<a class="btn btn-primary btn-sm" href="{{route('staff.create')}}">Add staff</a>
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>username</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($staffs as $staff)
						<tr>
							<td>{{$loop-> index +1}}</td>
							<td>{{$staff-> name}}</td>
							<td>{{$staff-> email}}</td>
							<td>{{$staff-> cell}}</td>
							<td>{{$staff-> uname}}</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="{{ route('staff.edit', $staff-> id) }}">Edit</a>
								<form style="display: inline-block;" action="{{ route('staff.destroy', $staff-> id) }}" method="POST">
									@csrf
									@method('DELETE')
									<button class="btn btn-sm btn-danger" >Delete</button>
								</form>
							</td>
						</tr>
						@endforeach
					
						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>