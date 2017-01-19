
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
--><!-- Tell the browser to be responsive to screen width -->
    
    <link href="{{URL::asset('admin/dist/css/AdminLTE.min.css')}}" rel="stylesheet"  type="text/css" >
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{URL::asset('admin/dist/css/skins/_all-skins.min.css')}}"  rel="stylesheet" >
    <link href="{{URL::asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template -->
  
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 

<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
   <link href="{{URL::asset('admin/bootstrap/css/bootstrap.min.css')}}"  rel="stylesheet"  type="text/css">
    <link href="{{URL::asset('admin/bootstrap/css/font-awesome.min.css')}}"  rel="stylesheet"  type="text/css" >
        <link href="{{URL::asset('admin/css/daterangepicker.css')}}"  rel="stylesheet"  type="text/css" >
    <link href="{{URL::asset('admin/fullcalendar/fullcalendar.min.css')}}"  rel="stylesheet"  type="text/css" >
       <!-- Content Wrapper. Contains page content -->

    <!-- Font Awesome -->
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- <link href="{{URL::asset('admin/plugins/ionicons/css/ionicons.min.css')}}"  rel="stylesheet"  type="text/css" > -->
    <!-- jvectormap -->
    
    <link href="{{URL::asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet"  type="text/css" >
    <!-- Theme style -->
  
  
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div id="app">
    <div class="wrapper">
         
    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

 
    <div class="content-wrapper">
    <script src="{{ URL::asset('admin/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>    
    <script src="{{ URL::asset('admin/plugins/jQueryUI/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
       
        @include('adminlte::layouts.partials.contentheader')
         <link href="{{URL::asset('admin/css/daterangepicker.css')}}"  rel="stylesheet"  type="text/css" >
    <link href="{{URL::asset('admin/fullcalendar/fullcalendar.min.css')}}"  rel="stylesheet"  type="text/css" >
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here --> @yield('breadcrump')
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    @include('adminlte::layouts.partials.footer')
 <script src="{{ url('admin/fullcalendar/lib') }}/moment.min.js"></script>
    
    @yield('js')

    @yield('script')
</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

</body>
</html>
