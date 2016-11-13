@extends('mahasiswa/base')

@section('activeprofile')
    active
@endsection

@section('title')
    Profile - Mahasiswa
@endsection

@section('addcss')
    @endsection

@section('addjs')

@endsection

@section('nav_position')
    Profile
@endsection


@section('name_account')
    {{ $mhs->name }}
@endsection

@section('role_account')
    Mahasiswa
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Profile</h4>
                </div>
                <div class="content">
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Username (disabled)</label>
                                    {{ csrf_field() }}
                                    <input name="id" type="hidden" class="form-control" value="{{ $mhs->id }}">

                                    <input name="username" type="text" class="form-control" value="{{ $mhs->username }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input name="nip" type="text" class="form-control" value="{{ $mhs->nim }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email" type="email" class="form-control" value="{{ $mhs->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input name="name" type="text" class="form-control" value="{{ $mhs->name }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="alamat" type="text" class="form-control" value="{{ $mhs->alamat }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input name="telp" type="number" class="form-control" value="{{ $mhs->telp }}" >
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    {{--<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>--}}
                </div>
                <div class="content">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="{{url('assets/img/default-avatar.png')}}" alt="..."/>

                            <h4 class="title">{{$mhs->name}}<br />
                                <small>{{$mhs->nim}}</small>
                            </h4>
                        </a>
                        <br>
                    </div>
                    <p class="description text-center">Teknik Informatika (DUMMY)<br>
                        Fakultas Informatika (DUMMY)<br>
                        2014 (DUMMY)
                    </p>
                </div>
                <hr>
            </div>
        </div>
    </div>

@endsection
