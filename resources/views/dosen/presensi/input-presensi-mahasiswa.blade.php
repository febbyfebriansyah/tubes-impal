@extends('dosen/base')

@section('input-presensi')
    active
@endsection

@section('title')
    Input Presensi - Dosen
@endsection

@section('addcss')
    @endsection

@section('nav_position')
    Input Presensi > Presensi Mahasiswa
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Input Tanggal Kelas</h4>
                </div>
                <div class="content">
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Nama Mata Kuliah</label>
                                    {{ csrf_field() }}
                                    <input class="form-control" required name="matkul_id">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Daftar Mahasiswa</h4>
                </div>
                <div class="content">
                    <form>
                        <div class="table table-responsive">
                            <table class="table">
                                <thead>
                                <th>Kehadiran</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                </thead>
                                <tbody>
                                @foreach($list_mahasiswa as $mahasiswa)
                                <tr>
                                    <td><input type="checkbox" aria-label="..."></td>
                                    <td class="">{{ $mahasiswa->name }}</td>
                                    <td class="">{{ $mahasiswa->nim }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill ">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
