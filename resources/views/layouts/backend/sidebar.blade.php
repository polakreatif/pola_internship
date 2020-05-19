        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <h3>{{ $companies->nama_company }}</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-home"></i> Home</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}">Dashboard</a>
                                </li>
                            </ul>
                        </li>
                        @if( Auth::user()->id == 1)
                        <li>
                            <a href="{{ url('/admin/company') }}"><i class="fa fa-info-circle"></i> Info Company</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/users') }}"><i class="fas fa-user"></i> Karyawan</a>
                        </li>
                        @endif
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user-plus"></i> Recruitment</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/admin/career') }}">Lihat Lowongan</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/submit') }}">Submit Karir</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/admin/jumbotron') }}">
                                <i class="fas fa-desktop"></i> Jumbotron</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-newspaper"></i> Blog</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/admin/article') }}">Lihat Isi Blog</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/article/create') }}">Tambah Isi Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fab fa-slideshare"></i> Carousel</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/admin/carousel') }}">Lihat Carousel</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/carousel/create') }}">Tambah Carousel</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-briefcase"></i> Produk</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/admin/product') }}">Lihat Produk</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/product/create') }}">Tambah Produk</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>