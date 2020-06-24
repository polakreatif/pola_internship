<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('user.index') }}">
      <div class="sidebar-brand-text mx-3">
          The Fashion Admin
      </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('user.index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    {{-- <!-- Nav Item - Produk Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-images"></i>
        <span>Produk</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{ route('produk.index') }}">Daftar Produk</a>
          <a class="collapse-item" href="{{ route('kategori.index') }}">Kategori Sepatu</a>
        </div>
      </div>
    </li> --}}

    <!-- Nav Item - Pemesanan Produk -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('riwayat.index') }}">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Riwayat Pesanan</span></a>
      </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->