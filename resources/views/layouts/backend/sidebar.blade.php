        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <h3>Inspiring Media</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-home"></i>Home</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/') }}">Home Company</a>
                                </li>
                                <li>
                                    <a href="{{ url('/home') }}">Home Admin</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Owner Menu</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">Info Company</a>
                                </li>
                                <li>
                                    <a href="#">Submit Karir</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/users/create') }}">Tambah Pengguna</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/users') }}">Lihat Pengguna</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-desktop"></i>Jumbotron</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-newspaper"></i>Blog</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/admin/users') }}">Lihat Isi Blog</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/users') }}">Tambah Isi Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-briefcase"></i>Produk</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>