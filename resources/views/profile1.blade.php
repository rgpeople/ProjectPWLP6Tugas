@extends('layouts.app2')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profil</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="small-box bg-light" style="width: 200px auto">
                <div class="inner">
                    <center>
                        <h4 style="font-weight: bold">Profil</h4><br><br>
                        <img src="dist/img/faiz.jpg" alt="foto" style="width:200px"> <br><br>


                        <h4 style="font-weight: bold">Biodata</h4>

                        <div class="container text-left">
                            <h4> <b>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">Nama Lengkap </div>
                                        <div class="col-sm-6 col md 6       ">: {{ $user[1]['name'] }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">username </div>
                                        <div class="col-sm-6 col md 6       ">: {{ $user[1]['username'] }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">e-mail </div>
                                        <div class="col-sm-6 col md 6       ">: {{ $user[1]['email'] }}</div>
                                    </div>
                                </b>
                            </h4>
                        </div>
                    </center>
                    <br>
                </div>
            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
