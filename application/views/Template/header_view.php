<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title><?= $page_title; ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?= base_url() . 'assets/images/happyicon.ico'; ?>" type="image/gif">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'assets/css/bootstrap.css'; ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'assets/css/fonts.css"'; ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'assets/css/style.css'; ?>">

    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="wrapper-triangle">
            <div class="pen">
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page">

        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner-outer">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a class="brand d-flex align-items-center display-6" href="<?= base_url() ?>">
                                        <img class="brand-logo-dark" src="<?= base_url() . 'assets/images/happypotsmaceta.jpg'; ?>" alt="" width="50" height="50" />
                                        Happy pots
                                    </a>
                                </div>
                            </div>

                            <div class="rd-navbar-right rd-navbar-nav-wrap">
                                <div class="rd-navbar-aside">
                                    <ul class="rd-navbar-contacts-2">
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                                <div class="unit-body"><a class="phone" href="tel:#">+503 7470 0643</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                                <div class="unit-body"><a class="address" href="#">El Salvador</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-share-2">
                                        <li><a class="icon mdi mdi-facebook" href="#" target="_blank"></a></li>
                                        <!--<li><a class="icon mdi mdi-twitter" href="#"></a></li>-->
                                        <li><a class="icon mdi mdi-instagram" href="https://www.instagram.com/happy.potsv/" target="_blank"></a></li>
                                        <!--<li><a class="icon mdi mdi-google-plus" href="#"></a></li>-->
                                    </ul>
                                </div>
                                <div class="rd-navbar-main">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item <?= $activo; ?>"><a class="rd-nav-link" href="<?= base_url() . 'Inicio'; ?>">Inicio</a>
                                        </li>
                                        <li class="rd-nav-item <?= $activo; ?>"><a class="rd-nav-link" href="<?= base_url() . 'Acerca'; ?>">Acerca De</a>
                                        </li>
                                        <li class="rd-nav-item <?= $activo; ?>"><a class="rd-nav-link" href="<?= base_url() . 'Product'; ?>">Productos</a>
                                        </li>
                                        <li class="rd-nav-item <?= $activo; ?>"><a class="rd-nav-link" href="<?= base_url() . 'Contact'; ?>">Contacto</a>
                                        </li>
                                    </ul>
                                </div>

                                
                        <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                            <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                            </div>
                        </div>
                        <div class="rd-navbar-project">
                            <div class="rd-navbar-project-header">
                                <h5 class="rd-navbar-project-title">Gallery</h5>
                                <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                                    <div class="project-close"><span></span><span></span></div>
                                </div>
                            </div>
                            <div class="rd-navbar-project-content rd-navbar-content">
                                <div>
                                    <div class="row gutters-20" data-lightgallery="group">
                                        <div class="col-6">
                                            <!-- Thumbnail Creative-->
                                            <article class="thumbnail thumbnail-creative"><a href="<?= base_url() . 'assets/images/project-1-1200x800-original.jpg'; ?>" data-lightgallery="item">
                                                    <div class="thumbnail-creative-figure"><img src="<?= base_url() . 'assets/images/project-1-195x164.jpg'; ?>" alt="" width="195" height="164" />
                                                    </div>
                                                    <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                                </a></article>
                                        </div>
                                        <div class="col-6">
                                            <!-- Thumbnail Creative-->
                                            <article class="thumbnail thumbnail-creative"><a href="<?= base_url() . 'assets/images/project-2-1200x800-original.jpg'; ?>" data-lightgallery="item">
                                                    <div class="thumbnail-creative-figure"><img src="<?= base_url() . 'assets/images/project-2-195x164.jpg'; ?>" alt="" width="195" height="164" />
                                                    </div>
                                                    <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                                </a></article>
                                        </div>
                                        <div class="col-6">
                                            <!-- Thumbnail Creative-->
                                            <article class="thumbnail thumbnail-creative"><a href="<?= base_url() . 'assets/images/project-3-1200x800-original.jpg'; ?>" data-lightgallery="item">
                                                    <div class="thumbnail-creative-figure"><img src="<?= base_url() . 'assets/images/project-3-195x164.jpg'; ?>" alt="" width="195" height="164" />
                                                    </div>
                                                    <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                                </a></article>
                                        </div>
                                        <div class="col-6">
                                            <!-- Thumbnail Creative-->
                                            <article class="thumbnail thumbnail-creative"><a href="<?= base_url() . 'assets/images/project-4-1200x800-original.jpg'; ?>" data-lightgallery="item">
                                                    <div class="thumbnail-creative-figure"><img src="<?= base_url() . 'assets/images/project-4-195x164.jpg'; ?>" alt="" width="195" height="164" />
                                                    </div>
                                                    <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                                </a></article>
                                        </div>
                                        <div class="col-6">
                                            <!-- Thumbnail Creative-->
                                            <article class="thumbnail thumbnail-creative"><a href="<?= base_url() . 'assets/images/project-5-1200x800-original.jpg'; ?>" data-lightgallery="item">
                                                    <div class="thumbnail-creative-figure"><img src="<?= base_url() . 'assets/images/project-5-195x164.jpg'; ?>" alt="" width="195" height="164" />
                                                    </div>
                                                    <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                                </a></article>
                                        </div>
                                        <div class="col-6">
                                            <!-- Thumbnail Creative-->
                                            <article class="thumbnail thumbnail-creative"><a href="<?= base_url() . 'assets/images/project-6-1200x800-original.jpg'; ?>" data-lightgallery="item">
                                                    <div class="thumbnail-creative-figure"><img src="<?= base_url() . 'assets/images/project-6-195x164.jpg'; ?>" alt="" width="195" height="164" />
                                                    </div>
                                                    <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                                </a></article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                </nav>
            </div>

        </header>