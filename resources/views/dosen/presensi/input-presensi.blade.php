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
    Input Presensi
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Input Presensi</h4>
                </div>
                <div class="content">
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Nama Mata Kuliah</label>
                                    {{ csrf_field() }}
                                    <select class="form-control" required name="matkul_id">
                                        <option selected="selected" disabled>Pilih MataKuliah</option>
                                        @foreach($list_matkul as $matkul)
                                            <option value="{{ $matkul->id }}">{{ $matkul->kelas->kode }} | {{ $matkul->nama }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-info btn-fill ">Select</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
