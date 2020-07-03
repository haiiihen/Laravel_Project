@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <!-- @if(session('sukses')) 
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif -->
            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Member</h3>
                            <div class="right">
                                <a href="/admin/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
                                <a href="/admin/exportPdf" class="btn btn-sm btn-primary">Export PDF</a>
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                    <i class="lnr lnr-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <td class="footable-visible footable-sortable footable-first-column" data-type="numeric" data-sort-initial="true">ID<span class="footable-sort-indicator"></span></td>
                                        <td>Nama Lengkap</td>
                                        <!-- <td>Nama Belakang</td> -->
                                        <td>Jenis Kelamin</td>
                                        <td>Tgl Lahir</td>
                                        <td>Alamat</td>
                                        <td>Instansi</td>
                                        <td>Email</td>
                                        <td>Instagram</td>
                                        <td>No Handphone</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/admin/create" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group {{$errors->has('nama_depan') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Nama Depan</label>
                            <input name="nama_depan" type="text" class="form-control" value="{{old('nama_depan')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                            @if($errors->has('nama_depan'))
                            <span class="help-block">{{$errors->first('nama_depan')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('nama_belakang') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" value="{{old('nama_belakang')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                        </div>
                        <div class="form-group {{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="Laki-Laki" {{(old('jenis_kelamin') == 'Laki-Laki') ? ' selected' : ''}}>Laki-Laki</option>
                                <option value="Perempuan" {{(old('jenis_kelamin') == 'Perempuan') ? ' selected' : ''}}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group {{$errors->has('tanggalLahir') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input name="tanggalLahir" type="date" class="form-control" value="{{old('tanggalLahir')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group {{$errors->has('alamat') ? ' has-error' : ''}}">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
                        </div>
                        <div class="form-group {{$errors->has('instansi') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Instansi</label>
                            <input name="instansi" type="text" class="form-control" value="{{old('instansi')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instansi">
                        </div>
                        <div class="form-group {{$errors->has('email') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" class="form-control" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group {{$errors->has('instagram') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Instagram</label>
                            <input name="instagram" type="text" class="form-control" value="{{old('instagram')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instagram">
                        </div>
                        <div class="form-group {{$errors->has('noHandphone') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">WhatsApp/No Handphone</label>
                            <input name="noHandphone" type="text" class="form-control" value="{{old('noHandphone')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="WhatsApp/No Handphone">
                        </div>
                        <div class="form-group{{$errors->has('avatar') ? ' has-error' : ''}}">
                            <label for="exampleFormControlTextarea1">Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                            @if($errors->has('avatar'))
                            <span class="help-block">{{$errors->first('avatar')}}</span>
                            @endif
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

@section('footer')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            processing:true,
            serverside:true,
            ajax:"{{route('ajax.get.data.member')}}",
            columns:[
                {data:'id', name:'id'},
                {data:'nama_lengkap', name:'nama_lengkap'},
                // {data:'nama_belakang', name:'nama_belakang'},
                {data:'jenis_kelamin', name:'jenis_kelamin'},
                {data:'tanggalLahir', name:'tanggalLahir'},
                {data:'alamat', name:'alamat'},
                {data:'instansi', name:'instansi'},
                {data:'email', name:'email'},
                {data:'instagram', name:'instagram'},
                {data:'noHandphone', name:'noHandphone'},
                {data:'aksi', name:'aksi', orderable: false, searchable:false},

            ]
        });

        $('.delete').click(function() {
            var siswa_id = $(this).attr('siswa-id');
            swal({
                    title: "Are you sure?",
                    text: "akan menghapus data member dengan id " + siswa_id + " ?? ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    console.log(willDelete);
                    if (willDelete) {
                        window.location = "/admin/" + siswa_id + "/delete";
                    }
                    // if (willDelete) {
                    //     swal("Poof! Your imaginary file has been deleted!", {
                    //         icon: "success",
                    //     });
                    // } else {
                    //     swal("Your imaginary file is safe!");
                    // }
                });
        });
    });
</script>

@endsection