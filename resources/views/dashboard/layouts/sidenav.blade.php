@section('sidenav')
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Master</div>
                <a class="nav-link" href="/jenisBarang">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Jenis Barang
                </a>
                <a class="nav-link" href="/pemasok">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Pemasok
                </a>
                <a class="nav-link" href="/toko">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Toko
                </a>
                <a class="nav-link" href="/gudang">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Gudang
                </a>
                <a class="nav-link" href="/barang">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Barang
                </a>
<<<<<<< HEAD
                <div class="sb-sidenav-menu-heading">Transaksi</div>
                <a class="nav-link" href="charts.html">
=======
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Akun</div>
                <a class="nav-link" href="/dashboard/akun">
>>>>>>> b537cadb8236cf67f9921f58c289e71736bd61eb
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Manajer Akun
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->check() ? auth()->user()->name : 'Guest' }}
            </div>
    </nav>
</div>

@endsection
