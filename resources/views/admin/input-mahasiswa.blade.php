@extends('admin/base')

@section('activemahasiswa')
    active
@endsection

@section('title')
    Input Mahasiswa - Admin Akademik
@endsection

@section('nav_position')
    Input Mahasiswa
@endsection

@section('content')
	<div class="card">
		<div class="header">
			<h4 class="title">Input Mahasiswa</h4>
		</div>
		<div class="content">
			<form action="" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Nama</label>
					<input name="nama" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label>NIM</label>
					<input name="nim" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Kelas</label>
					<input name="kelas" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input name="alamat" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label>No.Telp/HP</label>
					<input name="telp" type="text" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
@endsection
