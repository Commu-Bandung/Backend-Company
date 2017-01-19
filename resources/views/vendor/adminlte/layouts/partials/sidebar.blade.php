<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->


        @if (! Auth::guest())
            <div class="user-panel">
             <!-- Status -->
                <div class="pull-left image">

                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />

                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                     <p>{{ Auth::user()->nama_perusahaan }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                   
                </div>
            </div>
                <br>
        @endif

       

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('Dashboard') }}</li>
            <!-- Optionally, you can add icons to the links -->
             
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('Beranda') }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('Kelola Proposal') }}</span></a></li>
             <li><a href="{{ url('eventhome') }}"><i class='fa fa-files-o'></i> <span>{{ trans('Review Proposal') }}</span></a></li>

             <li><a href="{{ url('bantuandana') }}"><i class='fa fa-files-o'></i> <span>{{ trans('Kelola Bantuan Dana') }}</span></a></li>

       <ul class="sidebar-menu">
            <li class=" @if(url('/kategorikerjasama') == request()->url() or url('/kerjasama') == request()->url() ) active @else '' @endif  treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Kelola Kerjasama</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('kategorikerjasama')}}"><i class="fa fa-circle-o"></i> Kategori Kerjasama </a></li>
                <li><a href="{{URL::to('kerjasama')}}"><i class="fa fa-circle-o"></i> Kerjasama </a></li>
               
              </ul>
            </li>
               
              </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
