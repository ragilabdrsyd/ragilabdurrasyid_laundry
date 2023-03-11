<?php 
include_once '../../controllers/c_box.php';

$box = new c_box();
?>

<div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="../../assets/images/seven.png" srcset="../../assets/images/seven.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="../../assets/images/seven.png" srcset="../../assets/images/seven.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ms-3 ms-xl-0">
                                <!-- <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything"> -->
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1 show" data-bs-toggle="dropdown" aria-expanded="true">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <img src="../../assets/images/kawaii.png" alt="">
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status user-status-active"><?php echo $_SESSION['role'] ?></div>
                                                    <div class="user-name dropdown-indicator"><?php echo $_SESSION['nama'] ?></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end " style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-3.75px, 37.5px);" data-popper-placement="bottom-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                    <img src="../../assets/images/kawaii.png" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?php echo $_SESSION['nama'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="../../logout.php" name="logout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>