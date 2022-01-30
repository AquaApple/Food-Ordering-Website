<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('adminPanel/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminPanel/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Session()->get('userName')}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{{route('index')}}" class="nav-link">
                <i class="fas fa-house-user"></i>
              <p>
                Dashboard              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('create.category')}}" class="nav-link">
               <i class="fas fa-sitemap"></i>
              <p>
                Categories               
              </p>
            </a>
          </li>
          {{-- Start Drop Down--}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-hamburger"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('create.food')}}" class="nav-link">
                  <i class="fas fa-plus"></i>
                 <p>
                   Create Food Item                  
                 </p>
               </a>
              </li>
              <li class="nav-item">
                <a href="{{route('show.food')}}" class="nav-link">
                  <i class="fas fa-search"></i>
                  <p>
                    Show Food Items                  
                  </p>
                </a>
              </li>
            </ul>
          </li>
          {{-- End Drop Down--}}
          <li class="nav-item">
            <a href="{{route('orders.food')}}" class="nav-link">
              <i class="fas fa-shopping-cart"></i>
              <p>
                Orders
               {{--  <span class="right badge badge-success">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('user.login.page')}}" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>
                Sign Out                 
              </p>
            </a>
          </li>
        </ul>       
      </nav>
      <!-- /.sidebar-menu -->
    </div>
</aside>