@extends('admin/base')

@section('activekelas')
    active
@endsection

@section('title')
    Input Kelas - Admin Akademik
@endsection

@section('addcss')
    @endsection

@section('addjs')
    <script src="{{ url('bower_components/chained/jquery.chained.min.js') }}"></script>
    <script>
        $("#fakultas").chained("#jurusan");
    </script>
@endsection

@section('nav_position')
    Input Kelas
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Input Kelas</h4>
                </div>
                <div class="content">
                    <form method="post" action="{{url('admin/input-kelas')}}">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kode Kelas</label>
                                    {{ csrf_field() }}
                                    <input name="kelas" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select id="jurusan" name="jurusan" class="form-control" required>
                                      <option value="">--</option>
                                      <option value="Informatika">Informatika</option>
                                      <option value="Teknik Elektro">Teknik Elektro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Fakultas</label>
                                    <select id="fakultas" name="fakultas" class="form-control" required>
                                      <option value="">--</option>
                                      <option value="" class="Informatika">S1 Teknik Informatika</option>
                                      <option value="" class="Informatika">S1 Ilmu Komputasi</option>
                                      <option value="" class="Teknik Elektro">S1 Teknik Elektro</option>
                                      <option value="" class="Teknik Elektro">S1 Teknik Telekomunikasi</option>
                                      <option value="" class="Teknik Elektro">S1 Teknik Fisika</option>
                                    </select>

                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-info btn-fill ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Daftar Kelas</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover">
                        <thead>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Fakultas</th>
                        </thead>
                        <tbody>
                        @foreach($list_kelas as $kelas)
                        <tr>
                            <td>{{$kelas->kode}}</td>
                            <td>{{$kelas->jurusan}}</td>
                            <td>{{$kelas->fakultas}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
