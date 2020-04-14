<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <span class="brand-text font-weight-light">ShopTronik</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('/media/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->

        <li id="dashboard" class="nav-item">
          <a href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>   
        
        <!-- Products -->
        <li id="products" class="nav-item has-treeview">
          <a href="#products" class="nav-link">
            <i class="nav-icon fas fa-box-open"></i>
            <p>
              Product
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/products" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/products/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- categories -->
        <li id="categories" class="nav-item has-treeview">
          <a href="#categories" class="nav-link">
            <i class="nav-icon fas fa-th-large"></i>
            <p>
              Category
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/categories" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/categories/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Orders -->
        <li id="orders" class="nav-item has-treeview">
          <a href="#orders" class="nav-link">
            <i class="nav-icon fas fa-dolly-flatbed"></i>
            <p>
              Order
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/orders" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/orders/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Users -->
        <li id="users" class="nav-item has-treeview">
          <a href="#users" class="nav-link">
            <i class="nav-icon fas fa-user-friends"></i>
            <p>
              Users
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/users" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/users/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li>  

        <!-- Roles -->
        <li id="roles" class="nav-item has-treeview">
          <a href="#roles" class="nav-link">
            <i class="nav-icon fas fa-shield-alt"></i>
            <p>
              Role
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/roles" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/roles/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li> 

        <!-- Blogs -->
        <li id="blogs" class="nav-item has-treeview">
          <a href="#blogs" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Blog
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/blogs" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/blogs/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li>   
        <!-- Setting -->
        <li id="setting" class="nav-item">
          <a href="/setting" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Setting
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>  

        <li class="nav-header"></li>
        <!-- About App -->
        <li id="about-app" class="nav-item">
          <a href="/about-app" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              Documentation
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>  
        <!-- About App -->
        <li id="about-app" class="nav-item">
          <a href="/about-app" class="nav-link">
            <i class="nav-icon fas fa-angle-double-right"></i>
            <p>
              About App
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>  
        <!-- Logout -->
        <li id="setting" class="nav-item">
          <a href="/logout" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>   
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>