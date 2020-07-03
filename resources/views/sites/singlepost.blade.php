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
                            </div>
                        </div>
                        <div class="panel-body">
                            
                        <h2>{{$post->title}}</h2>
                        <p>{{$post->user->name}}</p>
                        <!-- gunakan slug  -->
                        <p>{{$post->created_at->format('D, d M Y')}}</p>
                        <p>{{$post->created_at->diffForHumans()}}</p>
                        <!-- <p>{{$post->created_at}}</p> --> 
                        <p>{!!$post->content!!}</p>
                    </div>
                    <!-- END TABLE HOVER -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection