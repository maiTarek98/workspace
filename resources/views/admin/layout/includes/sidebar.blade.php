 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        @if(Auth::check())

          <p><a href="#"> {{Auth::user()->name}}</a>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a></p>
          <p><a href="/logout">Logout</a></p>
        @endif
        </div>
      </div>
      <!-- search form -->
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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        @if(Auth::check())
         @if(Auth::user()->role == 1)
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>المستخدمين</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/user/create')}}"><i class="fa fa-circle-o"></i>اضافه</a></li>
            <li><a href="{{url('admin/user')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>

        @endif
        
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>خدامتنا</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/services/create')}}"><i class="fa fa-circle-o"></i>اضافه </a></li>
            <li><a href="{{url('admin/services')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>   
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>الصور</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/slider/create')}}"><i class="fa fa-circle-o"></i>اضافه</a></li>
            <li><a href="{{url('admin/slider')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>  
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>من نحن</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/about/create')}}"><i class="fa fa-circle-o"></i>اضافه</a></li>
            <li><a href="{{url('admin/about')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>       
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>عملائنا </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/customer/create')}}"><i class="fa fa-circle-o"></i>اضافه</a></li>
            <li><a href="{{url('admin/customer')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>    
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>أعمالنا</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/gallery/create')}}"><i class="fa fa-circle-o"></i>اضافه</a></li>
            <li><a href="{{url('admin/gallery')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>      
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>اتصل  بنا</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/contact')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>  
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>  المشتركين</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/subscribe')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>  
        @endif    

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
