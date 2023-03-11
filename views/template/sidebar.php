<div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu" >
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="html/index.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="../../assets/images/logo.png" srcset="../../assets/images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="../../assets/images/seven.png" srcset="../../assets/images/seven.png 2x" alt="logo-dark" style="transform:scale(1.65) translatex(20px) translatey(-7px);">
                            <img class="logo-small logo-img logo-img-small" src="../../assets/images/S.png" srcset="../../assets/images/S.png 2x" alt="logo-small">
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                    <div class="nk-sidebar-menu" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -16px 0px -40px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow-y:scroll; overflow-x:hidden;"><div class="simplebar-content" style="padding: 16px 0px 40px;">
                            <ul class="nk-menu" style="padding-left: 0;">
                                <li class="nk-menu-item">
                                    <a href="../pengguna/home.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Home</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <?php if($_SESSION['role'] == "kasir") { echo '
                                <li class="nk-menu-item">
                                    <a href="../transaksi/v_transaksi.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2-fill"></em></span>
                                        <span class="nk-menu-text">Transaksi</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="../transaksi/v_registrasi_pelanggan.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                                        <span class="nk-menu-text">Registrasi Pelanggan</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="../laporan/v_laporan.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                        <span class="nk-menu-text">Laporan Laundry</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                 ';} elseif ($_SESSION['role'] == "admin") { echo '
                                <li class="nk-menu-item">
                                    <a href="../pengguna/v_pengguna.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Pengguna</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="../outlet/v_list_outlet.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                                        <span class="nk-menu-text">Outlet</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="../produk/v_list_product.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-package-fill"></em></span>
                                        <span class="nk-menu-text">Produk</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="../transaksi/v_transaksi.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2-fill"></em></span>
                                        <span class="nk-menu-text">Transaksi</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="../transaksi/v_registrasi_pelanggan.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                                        <span class="nk-menu-text">Registrasi Pelanggan</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="../laporan/v_laporan.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                        <span class="nk-menu-text">Laporan Laundry</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                ';} elseif ($_SESSION['role'] == "owner") { echo '
                                <li class="nk-menu-item">
                                    <a href="../laporan/v_laporan.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                        <span class="nk-menu-text">Laporan Laundry</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                ';} ?>
                            </ul><!-- .nk-menu -->
                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 368px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>