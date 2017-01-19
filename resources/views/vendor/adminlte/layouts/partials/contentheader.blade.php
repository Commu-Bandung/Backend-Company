<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <p align="center">
        @yield('contentheader_title', 'Welcome in Commu ID')
        <p align="center">{{ Auth::user()->name }}</p>
        <small>@yield('contentheader_description')</small>
        </p>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>