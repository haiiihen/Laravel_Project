@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <!-- PROFILE HEADER -->
                <div class="profile-header">
                    <div class="overlay"></div>
                    <div class="profile-main">
                        <img src="{{ $siswa->getAvatar() }}" class="img-circle" alt="Avatar" width="150px" height="150px">
                        <h3 class="name">{{ $siswa->nama_depan}}</h3>
                    </div>
                    <div class="profile-stat">
                        <div class="row">
                            <div class="col-md-4 stat-item">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE HEADER -->

                <!-- PROFILE DETAIL -->
                <div class="profile-detail">
                    <div class="profile-info">
                        <h4 class="heading">Basic Info</h4>
                        <ul class="list-unstyled list-justify">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Nama Depan </strong>
                                    </div>
                                    <div>
                                        :
                                        {{ $siswa->nama_depan}}<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Nama Belakang </strong>
                                    </div>
                                    <div>
                                        :
                                        {{ $siswa->nama_belakang}}<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Jenis Kelamin </strong>
                                    </div>
                                    <div>
                                        :
                                        {{ $siswa->jenis_kelamin}}<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Tanggal Lahir </strong>
                                    </div>
                                    <div>
                                        :
                                        {{ $siswa->tanggalLahir}}<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Alamat </strong>
                                    </div>
                                    <div>
                                        :
                                        {{ $siswa->alamat}}<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Instansi </strong>
                                    </div>
                                    <div>
                                        :
                                        {{ $siswa->instansi}}<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Email </strong>
                                    </div>
                                    <div>
                                        :
                                        {{ $siswa->email}}<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>Instagram </strong>
                                    </div>
                                    <div>
                                        :
                                        {{ $siswa->instagram}}<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>No Handphone </strong>
                                    </div>
                                    <div>
                                        :
                                        {{ $siswa->noHandphone}}<br>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="profile-info">
                        <h4 class="heading">Social</h4>
                        <ul class="list-inline social-icons">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                    <div class="profile-info">
                        <h4 class="heading">About</h4>
                        <p>Interactively fashion excellent information after distinctive outsourcing.</p>
                    </div>
                    <div class="text-center"><a href="/admin/{{$siswa->id}}/edit" class="btn btn-primary">Edit Profile</a></div>
                </div>
                <!-- END PROFILE DETAIL -->
            </div>
        </div>
    </div>
</div>

@endsection