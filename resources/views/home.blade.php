@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Dashboard') }}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!----------------------------------------------profile-------------------------------------------------------->
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1>Profile</h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active">User Profile</li>
                                        </ol>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                        </section>
                        <!-- Main content -->
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">

                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-body box-profile">
                                                <div class="text-center">
                                                    <img class="profile-user-img img-fluid img-circle"
                                                        src="../../../images/p.jpg" alt="User profile picture">
                                                </div>

                                                <h3 class="profile-username text-center">Maica Angela C. Aguilar</h3>

                                                <p class="text-muted text-center">IT student</p>

                                                <ul class="list-group list-group-unbordered mb-3">
                                                    <li class="list-group-item">
                                                        <b>Followers</b> <a class="float-right">500,000,196</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Following</b> <a class="float-right">543</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Friends</b> <a class="float-right">13,287</a>
                                                    </li>
                                                </ul>

                                                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->

                                        <!-- About Me Box -->
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">About Me</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                                <p class="text-muted">
                                                    B.S. in information technology
                                                </p>

                                                <hr>

                                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                                <p class="text-muted">San Juan Apalit Pampanga</p>

                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                                <p class="text-muted">

                                                    <span class="tag tag-success">Coding</span>
                                                    <span class="tag tag-info">Javascript</span>
                                                    <span class="tag tag-warning">PHP</span>
                                                    <span class="tag tag-warning">Animation</span>
                                                 

                                                </p>

                                                <hr>

                                                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                                <p class="text-muted">cute lang , pero malakas</p>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-9">
                                        <div class="card">
                                            <div class="card-header p-2">
                                                <ul class="nav nav-pills">

                                                    <li class="nav-item"><a class="nav-link" href="#timeline"
                                                            data-toggle="tab">Timeline</a></li>

                                                </ul>
                                            </div><!-- /.card-header -->

                                            <!-- /.tab-pane -->

                                            <div class="tab-pane" id="timeline">
                                                <!-- The timeline -->
                                                <div class="timeline timeline-inverse">
                                                    <!-- timeline time label -->
                                                    <div class="time-label">
                                                        <span class="bg-info">
                                                            1st Year
                                                        </span>
                                                    </div>
                                                    
                                                    <div>
                                                        <i class="	fas fa-folder"></i>

                                                        <div class="timeline-item">

                                                            <div class="timeline-body">
                                                                drawing with voice , drawing parol sub sir monar
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="time-label">
                                                        <span class="bg-info">
                                                            2nd Year
                                                        </span>
                                                    </div>

                                                    <div>
                                                        <i class="	fas fa-folder"></i>

                                                        <div class="timeline-item">

                                                            <div class="timeline-body">
                                                                HTML project created website
                                                            </div>

                                                        </div>
                                                        <i class="	fas fa-folder"></i>

                                                        <div class="timeline-item">

                                                            <div class="timeline-body">
                                                                visual studio code created by local
                                                            </div>

                                                        </div>

                                                        <i class="	fas fa-folder"></i>

                                                        <div class="timeline-item">

                                                            <div class="timeline-body">
                                                                created Apps  in B4A
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="time-label">
                                                        <span class="bg-info">
                                                            3rd Year
                                                        </span>
                                                    </div>
                                                    
                                                    <div>
                                                        <i class="	fas fa-folder"></i>

                                                        <div class="timeline-item">

                                                            <div class="timeline-body">
                                                                 created website ecommerce using php and java script
                                                            </div>

                                                        </div>

                                                        <div class="timeline-item">

                                                            <div class="timeline-body">
                                                                 created schedule algo using vv.net
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <!-- timeline item -->




                                                    <!----------------------------------------------profile-----------end--------------------------------------------->


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- /.content -->
                            @endsection