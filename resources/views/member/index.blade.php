@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Member</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td class="footable-visible footable-sortable footable-first-column" data-type="numeric" data-sort-initial="true">ID<span class="footable-sort-indicator"></span></td>
                                        <td>Nama Depan</td>
                                        <td>Nama Belakang</td>
                                        <td>Jenis Kelamin</td>
                                        <td>Tgl Lahir</td>
                                        <td>Alamat</td>
                                        <td>Instansi</td>
                                        <td>Email</td>
                                        <td>Instagram</td>
                                        <td>No Handphone</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_anggota as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->nama_depan}}</td>
                                        <td>{{$data->nama_belakang}}</td>
                                        <td>{{$data->jenis_kelamin}}</td>
                                        <td>{{$data->tanggalLahir}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td>{{$data->instansi}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->instagram}}</td>
                                        <td>{{$data->noHandphone}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
