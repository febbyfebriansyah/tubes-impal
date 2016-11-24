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
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="card">
				<div class="header">
					<h4 class="title">Input Mahasiswa</h4>
				</div>
				<div class="content">
					<form action="{{ url('admin/input-mahasiswa') }}" method="post">
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
							<select name="kelas" class="form-control" required>
		                        <option selected="selected" disabled>Pilih kelas</option>
		                        @foreach($list_kelas as $kelas)
		                            <option value="{{ $kelas->id }}">{{ $kelas->kode }}</option>
		                        @endforeach
		                    </select>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input name="alamat" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>No.Telp/HP</label>
							<input name="telp" type="text" class="form-control" required>
						</div>
						<div  class="form-group">
							<label>Username</label>
							<input name="username" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password" type="text" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
