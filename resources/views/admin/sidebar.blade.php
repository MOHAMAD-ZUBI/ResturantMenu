<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('assets')}}/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="/logout" class="text-uppercase">logout</a>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group" style="padding: 15px">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i
                        class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{route('admin.dash')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>

            </li>


            <li class="treeview">
                <a href="{{route('admin.category.index')}}">
                    <i class="fa fa-folder"></i> <span>Categories</span>

                </a>
            </li>
            <li class="treeview">
                <a href="{{route('admin.product.index')}}">
                    <i class="fa fa-star-o"></i> <span>Products</span>

                </a>
            </li>
            <li class="treeview">
                <a href="{{route('admin.setting')}}">
                    <i class="fa fa-gear"></i> <span>Settings</span>

                </a>
            </li>
            <li class="treeview">
                <a href="{{route('admin.user.index')}}">
                    <i class="fa fa-user"></i> <span>Users</span>

                </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
