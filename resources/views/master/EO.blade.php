@extends('master.master')
@section('content')

    <!-- Page Content -->
    <div class="container">


        <!-- Image Header -->
        <div class="row" style="padding-bottom: 3%">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img class="img-responsive" src="http://placehold.it/1200x300" alt="" style="z-index: -1; margin-top: 2%">
            </div>

            <div class="col-md-12 col-sm-12" style="margin-top: -9%">
                <div class="col-md-2 col-sm-3">
                    <img class="img-responsive" src="{{url('image/square.jpg')}}" alt="" style="z-index: 1">                
                </div>
                <div class="col-md-10 col-sm-9" style="margin-top: 10%">
                    <h1 class="page-header" style="margin-top: 0">Schematics
                        <small>Kerja di rumah & dibayar!  DKerja di rumah & dibayar!  D</small>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
<!--                 <ol class="breadcrumb">
                    <li><a href="index">Home</a>
                    </li>
                    <li class="active">Sidebar Page</li>
                </ol> -->
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index" class="list-group-item">Home</a>
                    <a href="about" class="list-group-item">About</a>
                    <a href="services" class="list-group-item">Services</a>
                    <a href="contact" class="list-group-item">Contact</a>
                    <a href="portfolio-1-col" class="list-group-item">1 Column Portfolio</a>
                    <a href="portfolio-2-col" class="list-group-item">2 Column Portfolio</a>
                    <a href="portfolio-3-col" class="list-group-item">3 Column Portfolio</a>
                    <a href="portfolio-4-col" class="list-group-item">4 Column Portfolio</a>
                    <a href="portfolio-item" class="list-group-item">Single Portfolio Item</a>
                    <a href="blog-home-1" class="list-group-item">Blog Home 1</a>
                    <a href="blog-home-2" class="list-group-item">Blog Home 2</a>
                    <a href="blog-post" class="list-group-item">Blog Post</a>
                    <a href="full-width" class="list-group-item">Full Width Page</a>
                    <a href="sidebar" class="list-group-item active">Sidebar Page</a>
                    <a href="faq" class="list-group-item">FAQ</a>
                    <a href="404" class="list-group-item">404</a>
                    <a href="pricing" class="list-group-item">Pricing Table</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header" style="margin-top: 0">Services Panels</h2>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <span class="fa-stack fa-5x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <h4>Service One</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <span class="fa-stack fa-5x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <h4>Service Two</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <span class="fa-stack fa-5x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <h4>Service Three</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <span class="fa-stack fa-5x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <h4>Service Four</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Tabs -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Service Tabs</h2>
                    </div>
                    <div class="col-lg-12">

                        <ul id="myTab" class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Service One</a>
                            </li>
                            <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> Service Two</a>
                            </li>
                            <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Service Three</a>
                            </li>
                            <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Service Four</a>
                            </li>
                        </ul>

                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="service-one">
                                <h4>Service One</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                            </div>
                            <div class="tab-pane fade" id="service-two">
                                <h4>Service Two</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                            </div>
                            <div class="tab-pane fade" id="service-three">
                                <h4>Service Three</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                            </div>
                            <div class="tab-pane fade" id="service-four">
                                <h4>Service Four</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Service List -->
                <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Service List</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-2x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Service One</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-2x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Service Two</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-2x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Service Three</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-2x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Service Four</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-2x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-bomb fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Service Five</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-2x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-bank fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Service Six</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-2x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Service Seven</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-2x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-space-shuttle fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Service Eight</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-2x">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-recycle fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Service Nine</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->

        <hr>
    </div>
@endsection
