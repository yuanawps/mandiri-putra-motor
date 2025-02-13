  <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="<?= base_url('dashboard') ?>">
                                <div class="sb-nav-link-icon">
                                <img src="<?= base_url('assets/img/icdashboard.png') ?>" alt="Icon" style="width: 24px;">
                                 </div>
                                  Dashboard
                            </a>
                             <a class="nav-link" href="<?= base_url('dataadmin') ?>">
                                <div class="sb-nav-link-icon">
                                <img src="<?= base_url('assets/img/icadmin.png') ?>" alt="Icon" style="width: 24px;">
                                 </div>
                                  Data Admin
                            </a>
                            <a class="nav-link" href="<?= base_url('datahero') ?>">
                                <div class="sb-nav-link-icon">
                                <img src="<?= base_url('assets/img/ichero.png') ?>" alt="Icon" style="width: 24px;">
                                 </div>
                                  Data Hero
                            </a>
                            <a class="nav-link" href="<?= base_url('datastatus') ?>">
                                <div class="sb-nav-link-icon">
                                <img src="<?= base_url('assets/img/icstatus.png') ?>" alt="Icon" style="width: 22px;">
                                 </div>
                                  Data Status
                            </a>
                            <a class="nav-link" href="<?= base_url('daftar-produk') ?>">
                                 <div class="sb-nav-link-icon">
                                <img src="<?= base_url('assets/img/icproduk.png') ?>" alt="Icon" style="width: 24px;">
                                 </div>
                                  Data Produk
                            </a>
                        
                            <a class="nav-link" href="<?= base_url('datagaleri') ?>">
                                <div class="sb-nav-link-icon">
                                <img src="<?= base_url('assets/img/icgaleri.png') ?>" alt="Icon" style="width: 24px;">
                                 </div>
                                  Data Galeri
                            </a>

                            <a class="nav-link" href="<?= base_url('datakontak') ?>">
                                <div class="sb-nav-link-icon">
                                <img src="<?= base_url('assets/img/ickontak.png') ?>" alt="Icon" style="width: 24px;">
                                 </div>
                                  Data Kontak
                            </a>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>