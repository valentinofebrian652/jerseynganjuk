<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if(Auth::check())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('user.png') }} " class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ \Auth::user()->name  }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->
        @endif




        <!-- Sidebar Menu -->
        @if(Auth::check())
@if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('category.index') }}"><i class="fa fa-bars"></i> <span>Kategori</span></a></li>
            <li><a href="{{ route('product.index') }}"><i class="fa fa-cube"></i> <span>Produk</span></a></li>
            <li><a href="{{ route('confirmAdmin') }}"><i class="fa fa-dollar "></i> <span>Konfirmasi Pembayaran</span></a></li>
            <li ><a href="{{ url('/order') }}"><i class="fa  fa-exchange"></i> <span>Daftar Pesanan</span></a></li>
            <li ><a href="{{ url('/report') }}"><i class="fa  fa-file"></i> <span>Laporan</span></a></li>
        </ul>

        @elseif(\Illuminate\Support\Facades\Auth::user()->role == 'customer')
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">CUSTOMER MENU</li>
            <li>
                <a href="{{ url('/shopping-cart') }}"><i class="fa  fa-shopping-cart">
                    </i> <span>Keranjang</span>
                    <small class="label pull-right bg-maroon-active">{{ count(Cart::content()) }}</small>
                </a></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('/invoice/list') }}"><i class="fa fa-reply"></i> <span>Daftar Konfirmasi Pembelian</span></a></li>

        </ul>
        @endif
    @endif


        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">PRODUK</li>
            <li class="active"><a href="{{ url('/') }}"><i class="fa fa-bank "></i> <span>Home</span></a></li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>Kategori Produk</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    @foreach(\App\Category::all() as $category)
                        <li>
                            <a href="{{ url('product/category/'.$category->slug) }}">
                                <i class="fa fa-circle-o"></i>
                                <span>{{ $category->name }} <small class="label pull-right bg-maroon-active">{{ $category->products()->count() }}</small></span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>




        </ul>
            <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
