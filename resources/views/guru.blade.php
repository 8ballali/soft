<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

	<div class="container">

		<div class="card mt-5">
			<div class="card-header text-center">
				Data User 
			</div>
			<div class="card-body">

				<a href="/guru" class="btn btn-primary">Data User</a>
				|
				<a href="/guru/trash" class="btn btn-dark">Trash</a>
                |
				<a href="/guru/add" class="btn btn-success">Add user</a>

				<br/>
				<br/>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Umur</th>
							<th >OPTION</th>
						</tr>
					</thead>
					<tbody>
						@foreach($guru as $g)
						<tr>
							<td>{{ $g->nama }}</td>
							<td>{{ $g->umur }}</td>
                            <td>
							    <a href="/guru/hapus/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                <a href="/guru/edit/{{ $g->id }}" class="btn btn-warning">Edit</a>
                            </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>