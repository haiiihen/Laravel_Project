<!-- {{auth()->user()->name}} -->

@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row col-md-6 justify-content-center">
                <!-- PROFILE HEADER -->
                <div class="profile-header">
                    <div class="overlay"></div>
                    <div class="profile-main">
                        <img src="" class="img-circle" alt="Avatar" width="150px" height="150px">
                        <h3 class="name">{{ auth()->user()->name}}</h3>
                        <span class="online-status status-available">Available</span>
                    </div>
                    <div class="profile-stat">
                        <div class="row">
                            <div class="col-md-4 stat-item">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE HEADER -->
                <div class="profile-detail">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection