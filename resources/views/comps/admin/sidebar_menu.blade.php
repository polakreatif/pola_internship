<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->

    <li id="dashboard" class="nav-item">
      <a href="{{ url('/dashboard') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
          <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li>   
    
    <li id="jumbotron" class="nav-item">
      <a href="{{ url('/jumbotron') }}" class="nav-link">
        <i class="nav-icon fas fa-rocket"></i>
        <p>
          Jumbotron
          <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li> 

    <li id="jumbotron" class="nav-item">
      <a href="{{ url('/about-us') }}" class="nav-link">
        <i class="nav-icon fas fa-building"></i>
        <p>
          Tentang Kami
          <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li> 

    <li id="carousel" class="nav-item">
      <a href="{{ url('/carousel') }}" class="nav-link">
        <i class="nav-icon fas fa-tag"></i>
        <p>
          Carousel Promotion
          <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li> 

    <li id="carousel" class="nav-item">
      <a href="{{ url('/products') }}" class="nav-link">
        <i class="nav-icon fas fa-box-open"></i>
        <p>
          Produk
          <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li> 

    <!-- Orders -->
    <li id="orders" class="nav-item">
      <a href="{{ url('/orders') }}" class="nav-link">
        <i class="nav-icon fas fa-dolly-flatbed"></i>
        <p>
          Pesanan
          <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li>

    <!-- Users -->
    <li id="users" class="nav-item has-treeview">
      <a href="{{ url('/users') }}" class="nav-link">
        <i class="nav-icon fas fa-user-friends"></i>
        <p>
          Pengguna
         <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li>  

    <!-- Setting -->
    <li id="setting" class="nav-item">
      <a href="{{ url('/others') }}" class="nav-link">
        <i class="nav-icon fas fa-th-list"></i>
        <p>
          Lainnya
          <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li>  

    <!-- Setting -->
    <li id="setting" class="nav-item">
      <a href="{{ url('/setting') }}" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>
          Pengaturan
          <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li>  

    <!-- Logout -->
    <li id="logout" class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
          Keluar
          <span class="right badge badge-danger"></span>
        </p>
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </li>   

    <li class="nav-header"></li>
    <!-- Documentation App -->
    <li id="ducumentation" class="nav-item">
      <a href="{{ url('/documentation') }}" class="nav-link">
        <i class="nav-icon fas fa-file-alt"></i>
        <p>
          Documentasi
          <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li>  
    <!-- About App -->
    <li id="about-app" class="nav-item">
      <a href="{{ url('/about-app') }}" class="nav-link">
        <i class="nav-icon fas fa-angle-double-right"></i>
        <p>
          Tentang Applikasi
          <span class="right badge badge-danger"></span>
        </p>
      </a>
    </li>  

    
  </ul>
</nav>