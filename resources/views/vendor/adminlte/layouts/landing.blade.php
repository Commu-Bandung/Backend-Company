<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Commu ID - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Commu ID">

    <meta property="og:title" content="Commu" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Commu - {{ trans('Hallo') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>{{ trans('Commu ID - For Company ') }}</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>Commu For Company</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#desc" class="smoothScroll">Deskripsi Commu</a></li>
                    <li><a href="#showcase" class="smoothScroll">COMMU Apps is Avaliable!</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home"></section>
    <div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-12">
                    <h1>COMMU</h1>
                    <h3>Adalah layanan untuk membantu pendanaan acara acara Organisasi atau komunitas kampus dengan cara menghubungkan mereka ke perusahaan sebagai calon sponsor potensial mereka serta Bekerjasama.</h3>
                    <h3><a href="{{ url('/register') }}" class="btn btn-lg btn-success">{{ trans('adminlte_lang::message.gedstarted') }}</a></h3>
                </div>
                <div class="col-lg-2">
                   
                    <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
                </div>
                <div class="col-lg-8">
                    <img class="img-responsive" src="{{ asset('/img/office.jpg') }}" alt="">
                </div>
                <div class="col-lg-2">
                    <br>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->


    <section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <h1>Bergabung segera dengan Commu ID</h1>
                 <h3>Apa manfaat bergabung dengan Commu ID untuk Perusahaan? Commu ID membantu Perusahaan yang memiliki kesulitan dalam me-manage ratusan proposal penawaran yang masuk, merespons penawaran, memantau penggunaan dana, serta mendapatkan laporan feedback dari pendanaan mereka.</h3>
                <br>
                <br>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro01.png') }}" alt="">
                    <h3>Mendapatkan tujuan yang jelas untuk memberikan dana</h3>
                    <p>Dengan memberikan dana kepada organisasi yang jelas pasti akan membuat dampak yang positif</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/hand-shake.png') }}" alt="">
                    <h3>Kerjasama yang Jelas dan Mudah</h3>
                    <p>Dengan menggunakan layanan Commu ID, Proses
                    Kerjasama Perusahaan dengan Komunitas akan Mudah dan Jelas</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro03.png') }}" alt="">
                    <h3>Monitoring Proposal secara Realtime</h3>
                    <p>Dengan layanan Commu ID, Monitoring Proposal dapat dilakukan secara Realtime dan Proposal akan cepat di proses</p>
                </div>
            </div>
            <br>
            <hr>
        </div> <!--/ .container -->

    </div><!--/ #introwrap -->

    <!-- FEATURES WRAP -->
    
    <div id="features">
        <div class="container">
            <div class="row">
                <h1 class="centered">Aplikasi Commu ID</h1>
                <br>
                <br>
                <div class="col-lg-6 centered">
                    <img class="centered" src="{{ asset('/img/iphone.png') }}" alt="">
                </div>

                <div class="col-lg-6">
                    <h3>Commu ID memiliki Aplikasi Khusus Untuk Proses Kerjasama antara Perusahaan dan Organisasi yang memakai layanan Commu ID</h3>
                    <br>
                    <!-- ACCORDION -->
                    <div class="accordion ac" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                Fitur Kategori Event
                                </a>
                            </div><!-- /accordion-heading -->
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <p>Dengan Aplikasi Commu ID bisa melihat Event yang diselenggarakan oleh Organisasi</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                Fitur Chatting
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>Dengan Fitur Chat ini memudahkan untuk proses Kerjasama</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                   Fitur SMS and Call
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>Dengan Fitur SMS and Call membuat lebih mudah dalam proses Kerjasama</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                                                <br>
                    </div><!-- Accordion -->
                </div>
            </div>
        </div><!--/ .container -->
    </div><!--/ #features -->


    <section id="showcase" name="showcase"></section>
    <div id="showcase">
        <div class="container">
            <div class="row">
                <h1 class="centered">Its Commu ID</h1>
                <br>
                <div class="col-lg-8 col-lg-offset-2">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('/img/item-01.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/img/item-02.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>

        </div><!-- /container -->
        
  <div id="contact">
         </div>
           
    </div>
        
         

    <hr class="featurette-divider hidden-lg">
                <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                    <address>

                    <h3>Developed By Gentur and Firman</h3>

          <h4>Gentur Is Web Developers</h4>

          <h4>Firman Is Web and Android Developers</h4>

          <h3>Lokasi Kantor</h3>
                    <p class="lead"><a href="https://www.google.com/maps/preview?ie=UTF-8&q=-6.873454, 107.577341">Sarijadi<br>
            Bandung, Jawa Barat</a><br>
                    Phone: +6285-624-360-064<br>
                    </address>

                    </li>
                </div>
            </div>
        </div>
    </div>

<iframe
  width="1350"
  height="480"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC5QVyeouGCQU9Ho4Ir4W-1huPjFipsLPg
    &q=Politeknik Pos Indonesia, Jl. Sariasih no. 54, Jawa Barat 40151" allowfullscreen>
</iframe>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
