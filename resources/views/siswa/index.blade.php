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
                            <h3 class="panel-title">Hover Row</h3>
                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                    <i class="lnr lnr-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td width="2%" class="footable-visible footable-sortable footable-first-column" data-type="numeric" data-sort-initial="true">ID<span class="footable-sort-indicator"></span></td>
                                        <td width="7%">Nama Depan</td>
                                        <td width="8%">Nama Belakang</td>
                                        <td width="8%">Jenis Kelamin</td>
                                        <td width="8%">Tgl Lahir</td>
                                        <td width="13%">Alamat</td>
                                        <td width="9%">Instansi</td>
                                        <td width="10%">Email</td>
                                        <td width="8%">Instagram</td>
                                        <td width="9%">No Handphone</td>
                                        <td width="18%">Action</td>
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
                                        <td>
                                            <a href="/anggota/{{$data->id}}/profile" class="btn btn-primary btn-sm">Show</a>
                                            <a href="/anggota/{{$data->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/anggota/{{$data->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Yakin data akan dihapus?')">Delete</a>
                                        </td>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/anggota/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Depan</label>
                            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input name="tanggalLahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Instansi</label>
                            <input name="instansi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instansi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Instagram</label>
                            <input name="instagram" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instagram">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">WhatsApp/No Handphone</label>
                            <input name="noHandphone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="WhatsApp/No Handphone">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</<button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection