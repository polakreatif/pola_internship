<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ url('/') }}" class="brand-link">
    <span class="brand-text font-weight-light">{{ $setting->app_name }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('storage/'. $user_admin->avatar) }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ $user_admin->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    @include('comps.admin.sidebar_menu')

  </div>
  <!-- /.sidebar -->
</aside>