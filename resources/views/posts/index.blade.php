@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Event</h3>
                            <div class="right"> 
                                <a href="{{route('posts.add')}}" class="btn btn-sm btn-primary">Add New Event</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>TITLE</td>
                                        <td>USER</td>
                                        <td>ACTION</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->user->name}}</td>
                                        
                                        <td>
                                            <a target="_blank" href="{{route('site.single.post',$post->slug)}}" class="btn btn-info btn-sm">View</a>
                                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
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
</div>

@endsection

@section('footer')
<script>
    $('.delete').click(function() {
        var siswa_id = $(this).attr('siswa-id');
        swal({
                title: "Are you sure?",
                text: "akan menghapus data member dengan id "+ siswa_id +" ?? ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                console.log(willDelete);
                if(willDelete){
                    window.location = "/admin/"+siswa_id+"/delete";
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
</script>

@endsection