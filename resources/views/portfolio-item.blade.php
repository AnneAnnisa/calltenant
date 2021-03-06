@extends('master.master')

@section('content')
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nama Event
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index">Home</a></li>
                    <li><a href="{{url('EO')}}">Nama EO</a></li>
                    <li class="active">Nama Event</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-6" style="padding:0 5%">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="{{('event/p1.jpg')}}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{('event/p2.jpg')}}" alt="">
                        </div>
<!--                         <div class="item">
                            <img class="img-responsive" src="{{('event/p3.jpg')}}" alt="">
                        </div> -->
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-4 col-xs-12" style="padding:0">
                        <h4><span class="glyphicon glyphicon-user"></span> EO</h4>
                    </div>
                    <div class="col-md-8 col-xs-12" style="padding:0">
                        <h4>: <a href="{{url('EO')}}" style="color: red">Schematics</h4></a>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-4 col-xs-12" style="padding:0">
                        <h4><span class="glyphicon glyphicon-map-marker"></span> Lokasi</h4>
                    </div>
                    <div class="col-md-8 col-xs-12" style="padding:0">
                        <h4>: Pusat Gegung Robotika Campus ITS 60111, Jalan ITS Raya, Sukolilo, Keputih, Surabaya, Kota SBY, Jawa Timur 60117, Indonesia</h4>
                        <h5><a href="https://www.google.com/maps/place/Sea+World+Dr,+San+Diego,+CA/@32.7611147,-117.2221996,17z/data=!3m1!4b1!4m5!3m4!1s0x80deaa8ac7f3075b:0x619d2266fca2db1b!8m2!3d32.7611102!4d-117.2200109" target="_blank"><span class="glyphicon glyphicon-globe"></span> Lihat Peta!</a></h5>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-4 col-xs-12" style="padding:0">
                        <h4><span class="glyphicon glyphicon-calendar"></span> Tanggal</h4>
                    </div>
                    <div class="col-md-8 col-xs-12" style="padding:0">
                        <h4>: 25 September 2016 - 26 Desember 2017</h4>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-4 col-xs-12" style="padding:0">
                        <h4><span class="glyphicon glyphicon-phone-alt"></span> Contact Person</h4>
                    </div>
                    <div class="col-md-8 col-xs-12" style="padding:0">
                        <h4>: 2543903849</h4>
                    </div>
                </div>
<!--                 <div class="col-md-12">
                    <h4>Penyelenggara</h4>
                    <h4></h4>
                    <h4><span class="glyphicon glyphicon-calendar"></span> Tanggal : 25 September 2016 - 26 Desember 2017</h4>
                </div> -->
            </div>
            <div class="col-md-12">
                <h3>Apa itu "Nama Event"?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="{{('event/p1.jpg')}}" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="{{('event/1.jpg')}}" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

        <hr>
@endsection