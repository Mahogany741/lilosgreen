<!doctype html>

<html class="no-js" lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Lilos Green - Minha Conta </title>

    <meta name="robots" content="noindex, follow" />

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">



    <!-- CSS

	============================================ -->



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">



    <!-- Icon Font CSS -->

    <link rel="stylesheet" href="assets/css/vendor/plazaicon.css">

    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">

    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">



    <!-- Plugins CSS -->

    <link rel="stylesheet" href="assets/css/plugins/animate.css">

    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">

    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">



    <!-- Helper CSS -->

    <link rel="stylesheet" href="assets/css/helper.css">



    <!-- Main Style CSS -->

    <link rel="stylesheet" href="assets/css/style.css">





    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <!-- <link rel="stylesheet" href="assets/css/plugins-min/plugins.min.css">

    <link rel="stylesheet" href="assets/css/style.min.css"> -->





</head>



<body>

<?php
session_start();
//echo $_SESSION['autenticado'] ;
if(($_SESSION['autenticado'] == 'Sim')) {



echo "usuário já se autenticou";


} else {
    echo "usuário não  se autenticou";
//redirecionar para a tela de login

header('Location: login.php');


}

?>





    <div class="main-wrapper">





        <!--Top Notification Start-->

        <div style="background: #498136;" class="top-notification-bar text-center">

            <div class="container">

                <div class="notification-entry">

                    <p>Os agrônomos plantam esperança para colher um bom futuro!</p>

                </div>

            </div>

            <div class="notification-close">

                <button class="notification-close-btn"><i class="fa fa-times"></i></button>

            </div>

        </div>

        <!--Top Notification End-->



        <!--Header Section Start-->

        <div class="header-section d-none d-lg-block">

            <div class="main-header">

                <div class="container position-relative">

                    <div class="row align-items-center">

                        <div class="col-lg-2">

                            <div class="header-logo">

                                <a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a>

                            </div>

                        </div>

                        <div class="col-lg-7 position-static">

                            <div class="site-main-nav">

                                <nav class="site-nav">

                                    <ul>

                                        <li><a href="index.html">Home</a></li>

                                        <li>

                                            <a href="#">Shop <span class="new">New</span></a>



                                            <ul class="mega-sub-menu">

                                                <li class="mega-dropdown">

                                                    <a class="mega-title" href="#">Shop</a>



                                                    <ul class="mega-item">

                                                        <li><a href="shop-grid-3.html">Shop Grid 3</a></li>

                                                        <li><a href="shop-grid-4.html">Shop Grid 4</a></li>

                                                        <li><a href="shop-list.html">Shop List</a></li>

                                                        <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>

                                                        <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>

                                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>

                                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>

                                                    </ul>

                                                </li>

                                                <li class="mega-dropdown">

                                                    <a class="mega-title" href="#">Shop Single</a>



                                                    <ul class="mega-item">

                                                        <li><a href="shop-single.html">Shop Single</a></li>

                                                        <li><a href="shop-single-affiliate.html">Shop Single Affiliate</a></li>

                                                        <li><a href="shop-single-variable.html">Shop Single Variable</a></li>

                                                        <li><a href="shop-single-group.html">Shop Single Group</a></li>

                                                    </ul>

                                                </li>

                                                <li class="mega-dropdown">

                                                    <a class="mega-title" href="#">Page</a>



                                                    <ul class="mega-item">

                                                        <li><a href="cart.html">Cart</a></li>

                                                        <li><a href="wishlist.html">Wishlist</a></li>

                                                        <li><a href="compare.html">Compare</a></li>

                                                        <li><a href="checkout.html">Checkout</a></li>

                                                        <li><a href="empty-cart.html">Empty Cart</a></li>

                                                        <li><a href="my-account.html">My Account</a></li>

                                                    </ul>

                                                </li>

                                                <li class="mega-dropdown">

                                                    <a class="menu-banner" href="#">

                                                        <img src="assets/images/menu-banner.jpg" alt="">

                                                    </a>

                                                </li>

                                            </ul>

                                        </li>

                                        <li>

                                            <a href="#">Blog</a>



                                            <ul class="sub-menu">

                                                <li>

                                                    <a href="#">Blog</a>

                                                    <ul class="sub-menu">

                                                        <li><a href="blog.html">Blog</a></li>

                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>

                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>

                                                    </ul>

                                                </li>

                                                <li>

                                                    <a href="#">Blog Single</a>

                                                    <ul class="sub-menu">

                                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>

                                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>

                                                    </ul>

                                                </li>

                                            </ul>

                                        </li>

                                        <li>

                                            <a href="#">Pages <span class="sale">Sale</span></a>

                                            <ul class="sub-menu">

                                                <li><a href="about.html">About</a></li>

                                                <li><a href="cart.html">Cart</a></li>

                                                <li><a href="wishlist.html">Wishlist</a></li>

                                                <li><a href="compare.html">Compare</a></li>

                                                <li><a href="checkout.html">Checkout</a></li>

                                                <li><a href="empty-cart.html">Empty Cart</a></li>

                                                <li><a href="my-account.html">My Account</a></li>

                                                <li><a href="login.html">Login</a></li>

                                                <li><a href="register.html">Register</a></li>

                                            </ul>

                                        </li>

                                        <li><a href="contact.html">Contact</a></li>

                                    </ul>

                                </nav>

                            </div>

                        </div>

                        <div class="col-lg-3">

                            <div class="header-meta-info">

                                <div class="header-search">

                                    <form action="#">

                                        <input type="text" placeholder="Search our store ">

                                        <button><i class="icon-search"></i></button>

                                    </form>

                                </div>

                                <div class="header-account">

                                    <div class="header-account-list dropdown top-link">

                                        <a href="#" role="button" data-toggle="dropdown"><i class="icon-users"></i></a>



                                        <ul class="dropdown-menu ">

                                            <li><a href="#">Delivery</a></li>

                                            <li><a href="#">Legal Notice</a></li>

                                            <li><a href="#">Secure payment</a></li>

                                            <li><a href="#">Sitemap</a></li>

                                            <li><a href="#">About us</a></li>

                                        </ul>

                                    </div>

                                    <div class="header-account-list dropdown mini-cart">

                                        <a href="#" role="button" data-toggle="dropdown">

                                            <i class="icon-shopping-bag"></i>

                                            <span class="item-count ">3</span>

                                        </a>



                                        <ul class="dropdown-menu ">

                                            <li class="product-cart">

                                                <div class="single-cart-box">

                                                    <div class="cart-img">

                                                        <a href="shop-single.html"><img src="assets/images/cart/cart-1.jpg" alt=""></a>

                                                        <span class="pro-quantity">1x</span>

                                                    </div>

                                                    <div class="cart-content">

                                                        <h6 class="title"><a href="shop-single.html">Rock Soapwort</a></h6>

                                                        <div class="cart-price">

                                                            <span class="sale-price">$70.00</span>

                                                            <span class="regular-price">$80.00</span>

                                                        </div>

                                                    </div>

                                                    <a href="javascript:void(0);" class="del-icon"><i class="fa fa-trash"></i></a>

                                                </div>

                                                <div class="single-cart-box">

                                                    <div class="cart-img">

                                                        <a href="shop-single.html"><img src="assets/images/cart/cart-2.jpg" alt=""></a>

                                                        <span class="pro-quantity">1x</span>

                                                    </div>

                                                    <div class="cart-content">

                                                        <h6 class="title"><a href="shop-single.html">Rock Soapwort</a></h6>

                                                        <div class="cart-price">

                                                            <span class="sale-price">$70.00</span>

                                                            <span class="regular-price">$80.00</span>

                                                        </div>

                                                    </div>

                                                    <a href="javascript:void(0);" class="del-icon"><i class="fa fa-trash"></i></a>

                                                </div>

                                                <div class="single-cart-box">

                                                    <div class="cart-img">

                                                        <a href="shop-single.html"><img src="assets/images/cart/cart-3.jpg" alt=""></a>

                                                        <span class="pro-quantity">1x</span>

                                                    </div>

                                                    <div class="cart-content">

                                                        <h6 class="title"><a href="shop-single.html">Rock Soapwort</a></h6>

                                                        <div class="cart-price">

                                                            <span class="sale-price">$70.00</span>

                                                            <span class="regular-price">$80.00</span>

                                                        </div>

                                                    </div>

                                                    <a href="javascript:void(0);" class="del-icon"><i class="fa fa-trash"></i></a>

                                                </div>

                                            </li>

                                            <li class="product-total">

                                                <ul class="cart-total">

                                                    <li> Total : <span>$189.00</span></li>

                                                </ul>

                                            </li>

                                            <li class="product-btn">

                                                <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--Header Section End-->





        <!--Header Mobile Start-->

        <div class="header-mobile d-lg-none">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-6">

                        <div class="header-logo">

                            <a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a>

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="header-meta-info">

                            <div class="header-account">

                                <div class="header-account-list dropdown top-link">

                                    <a href="#" role="button" data-toggle="dropdown"><i class="icon-users"></i></a>



                                    <ul class="dropdown-menu ">

                                        <li><a href="#">Delivery</a></li>

                                        <li><a href="#">Legal Notice</a></li>

                                        <li><a href="#">Secure payment</a></li>

                                        <li><a href="#">Sitemap</a></li>

                                        <li><a href="#">About us</a></li>

                                    </ul>

                                </div>

                                <div class="header-account-list mini-cart">

                                    <a href="#">

                                        <i class="icon-shopping-bag"></i>

                                        <span class="item-count ">0</span>

                                    </a>

                                </div>

                                <div class="header-account-list mobile-menu-trigger">

                                    <button id="menu-trigger">

                                        <span></span>

                                        <span></span>

                                        <span></span>

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--Header Mobile End-->



        <!--Header Mobile Menu Start-->

        <div class="header-mobile-menu d-lg-none">



            <a href="javascript:void(0)" class="mobile-menu-close">

                <span></span>

                <span></span>

            </a>



            <div class="header-meta-info">

                <div class="header-search">

                    <form action="#">

                        <input type="text" placeholder="Search our store ">

                        <button><i class="icon-search"></i></button>

                    </form>

                </div>

            </div>



            <div class="site-main-nav">

                <nav class="site-nav">

                    <ul class="navbar-mobile-wrapper">

                        <li><a href="index.html">Home</a></li>

                        <li>

                            <a href="#">Shop <span class="new">New</span></a>



                            <ul class="mega-sub-menu">

                                <li class="mega-dropdown">

                                    <a class="mega-title" href="#">Shop</a>



                                    <ul class="mega-item">

                                        <li><a href="shop-grid-3.html">Shop Grid 3</a></li>

                                        <li><a href="shop-grid-4.html">Shop Grid 4</a></li>

                                        <li><a href="shop-list.html">Shop List</a></li>

                                        <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>

                                        <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>

                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>

                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>

                                    </ul>

                                </li>

                                <li class="mega-dropdown">

                                    <a class="mega-title" href="#">Shop Single</a>



                                    <ul class="mega-item">

                                        <li><a href="shop-single.html">Shop Single</a></li>

                                        <li><a href="shop-single-affiliate.html">Shop Single Affiliate</a></li>

                                        <li><a href="shop-single-variable.html">Shop Single Variable</a></li>

                                        <li><a href="shop-single-group.html">Shop Single Group</a></li>

                                    </ul>

                                </li>

                                <li class="mega-dropdown">

                                    <a class="mega-title" href="#">Page</a>



                                    <ul class="mega-item">

                                        <li><a href="cart.html">Cart</a></li>

                                        <li><a href="wishlist.html">Wishlist</a></li>

                                        <li><a href="compare.html">Compare</a></li>

                                        <li><a href="checkout.html">Checkout</a></li>

                                        <li><a href="empty-cart.html">Empty Cart</a></li>

                                        <li><a href="my-account.html">My Account</a></li>

                                    </ul>

                                </li>

                                <li class="mega-dropdown">

                                    <a class="menu-banner" href="#">

                                        <img src="assets/images/menu-banner.jpg" alt="">

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a href="#">Blog</a>



                            <ul class="sub-menu">

                                <li>

                                    <a href="#">Blog</a>

                                    <ul class="sub-menu">

                                        <li><a href="blog.html">Blog</a></li>

                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>

                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>

                                    </ul>

                                </li>

                                <li>

                                    <a href="#">Blog Single</a>

                                    <ul class="sub-menu">

                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>

                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>

                                    </ul>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a href="#">Pages <span class="sale">Sale</span></a>

                            <ul class="sub-menu">

                                <li><a href="about.html">About</a></li>

                                <li><a href="cart.html">Cart</a></li>

                                <li><a href="wishlist.html">Wishlist</a></li>

                                <li><a href="compare.html">Compare</a></li>

                                <li><a href="checkout.html">Checkout</a></li>

                                <li><a href="empty-cart.html">Empty Cart</a></li>

                                <li><a href="my-account.html">My Account</a></li>

                                <li><a href="login.html">Login</a></li>

                                <li><a href="register.html">Register</a></li>

                            </ul>

                        </li>

                        <li><a href="contact.html">Contact</a></li>

                    </ul>

                </nav>

            </div>



            <div class="header-social">

                <ul class="social">

                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>

                </ul>

            </div>



        </div>

        <!--Header Mobile Menu End-->



        <div class="overlay"></div>

        <!--Overlay-->



        <!--Page Banner Start-->

        <div class="page-banner" style="background-image: url(assets/images/testimonial-bg.jpg);">

            <!-- <div class="container">

                <div class="page-banner-content text-center">

                    <h2 class="title">My Account</h2>

                    <ol class="breadcrumb justify-content-center">

                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">My Account</li>

                    </ol>

                </div>

            </div> -->

        </div>

        <!--Page Banner End-->



        <!--My Account Start-->

        <div class="register-page section-padding-5">

            <div class="container">

                <div class="row">

                    <div class="col-xl-3 col-md-4">

                        <div class="my-account-menu mt-30">

                            <ul class="nav account-menu-list flex-column">

                                <li>

                                    <a class="active" data-toggle="pill" href="#pills-dashboard"><i class="fa fa-tachometer"></i> Dashboard</a>

                                </li>

                                <li>

                                    <a data-toggle="pill" href="#pills-order"><i class="fa fa-shopping-cart"></i> Compras</a>

                                </li>

                                <li>

                                    <a data-toggle="pill" href="#pills-download"><i class="fa fa-cloud-download"></i> Download</a>

                                </li>

                                <li>

                                    <a data-toggle="pill" href="#pills-payment"><i class="fa fa-credit-card"></i> Formas de Pagamento</a>

                                </li>

                                <li>

                                    <a data-toggle="pill" href="#pills-address"><i class="fa fa-map-marker"></i> Endereço</a>

                                </li>

                                <li>

                                    <a data-toggle="pill" href="#pills-account"><i class="fa fa-user"></i> Detalhes da conta</a>

                                </li>

                                <li>

                                    <a href="login.html"><i class="fa fa-sign-out"></i> Sair</a>

                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-xl-8 col-md-8">

                        <div class="tab-content my-account-tab mt-30" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-dashboard">

                                <div class="my-account-dashboard account-wrapper">

                                    <h4 class="account-title">Dashboard</h4>

                                    <div class="welcome-dashboard">

                                        <p><?php echo $_SESSION['id_usuario']; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-order">

                                <div class="my-account-order account-wrapper">

                                    <h4 class="account-title">Compras</h4>

                                    <div class="account-table text-center mt-30 table-responsive">

                                        <table class="table">

                                            <thead>

                                                <tr>

                                                    <th class="no">No</th>

                                                    <th class="name">Nome</th>

                                                    <th class="date">Data</th>

                                                    <th class="status">Status</th>

                                                    <th class="total">Total</th>

                                                    <th class="action">Ação</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <tr>

                                                    <td>1</td>

                                                    <td>Tomate</td>

                                                    <td>22/08/2020</td>

                                                    <td>Pendente</td>

                                                    <td>R$100,00</td>

                                                    <td><a href="#">Visualizar</a></td>

                                                </tr>

                                                <tr>

                                                    <td>2</td>

                                                    <td>Alface</td>

                                                    <td>22/07/2020</td>

                                                    <td>Aprovado</td>

                                                    <td>R$45,00</td>

                                                    <td><a href="#">Visualizar</a></td>

                                                </tr>

                                                <tr>

                                                    <td>3</td>

                                                    <td>Cenoura</td>

                                                    <td>21/06/2020</td>

                                                    <td>Em espera</td>

                                                    <td>R$99,00</td>

                                                    <td><a href="#">Visualizar</a></td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-download">

                                <div class="my-account-download account-wrapper">

                                    <h4 class="account-title">Download</h4>

                                    <div class="account-table text-center mt-30 table-responsive">

                                        <table class="table">

                                            <thead>

                                                <tr>

                                                    <th class="name">Produto</th>

                                                    <th class="date">Data</th>

                                                    <th class="status">Expirar</th>

                                                    <th class="action">Download</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <tr>

                                                    <td>Alface</td>

                                                    <td>22/08/2021</td>

                                                    <td>Sim</td>

                                                    <td><a href="#">Download do arquivo</a></td>

                                                </tr>

                                                <tr>

                                                    <td>Tomate</td>

                                                    <td>22/07/2021</td>

                                                    <td>Nunca</td>

                                                    <td><a href="#">Download do arquivo</a></td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-payment">

                                <div class="my-account-payment account-wrapper">

                                    <h4 class="account-title">Formas de Pagamento</h4>

                                    <p class="mt-30">Em manutenção.</p>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-address">

                                <div class="my-account-address account-wrapper">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <h4 class="account-title">Endereço de cobrança</h4>

                                            <div class="account-address mt-30">

                                                <h6 class="name">Alex Santos</h6>

                                                <p>Av Paulista 000, São Paulo</p>

                                                <p>Contato: (11) 00000-0000</p>

                                                <a class="btn btn-primary" href="#"><i class="fa fa-edit"></i> Editar endereço</a>

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <h4 class="account-title">Endereço de envio</h4>

                                            <div class="account-address mt-30">

                                                <h6 class="name">Alex Santos</h6>

                                                <p>Av Paulista 000, São Paulo</p>

                                                <p>Contato: (11) 00000-0000</p>

                                                <a class="btn btn-primary" href="#"><i class="fa fa-edit"></i> Editar endereço</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-account">

                                <div class="my-account-details account-wrapper">

                                    <h4 class="account-title">Detalhes da conta</h4>



                                    <div class="account-details">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="single-form">

                                                    <input type="text" placeholder="Primeiro nome">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="single-form">

                                                    <input type="text" placeholder="Sobrenome">

                                                </div>

                                            </div>

                                            <div class="col-md-12">

                                                <div class="single-form">

                                                    <input type="text" placeholder="Nome de exibição">

                                                </div>

                                            </div>

                                            <div class="col-md-12">

                                                <div class="single-form">

                                                    <input type="text" placeholder="E-mail">

                                                </div>

                                            </div>

                                            <div class="col-md-12">

                                                <div class="single-form">

                                                    <h5 class="title">Mudar senha</h5>

                                                </div>

                                            </div>

                                            <div class="col-md-12">

                                                <div class="single-form">

                                                    <input type="password" placeholder="Senha atual">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="single-form">

                                                    <input type="password" placeholder="Nova senha">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="single-form">

                                                    <input type="password" placeholder="Confirmar senha">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="single-form">

                                                    <button class="btn btn-primary">Salvar alterações</button>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--My Account End-->





        <!--Footer Section Start-->

        <div style="background: #498136;" class="footer-area">

            <div class="container">

                <div class="footer-widget-area section-padding-6">

                    <div class="row justify-content-between">



                        <!--Footer Widget Start-->

                        <div class="col-lg-4 col-md-6">

                            <div class="footer-widget">

                                <a class="footer-logo" href="#"><img src="assets/images/logo/logo-white.png" alt=""></a>

                                <div class="footer-widget-text">

                                    <p>Despertando em você o prazer em se alimentar corretamente.</p>

                                </div>

                                <div class="widget-social">

                                    <ul>

                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                                    </ul>

                                </div>

                            </div>

                            <!--Footer Widget End-->

                        </div>



                        <div class="col-lg-2 col-md-4 col-sm-6">

                            <div class="footer-widget">

                                <h4 class="footer-widget-title">Institucional</h4>



                                <div class="footer-widget-menu">

                                    <ul>

                                        <li><a href="#">Quem somos nós</a></li>

                                        <li><a href="#">Contato</a></li>

                                        <li><a href="#">Trabalhe conosco</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-2 col-md-4 col-sm-6">

                            <div class="footer-widget">

                                <h4 class="footer-widget-title">Nossa Loja</h4>



                                <div class="footer-widget-menu">

                                    <ul>

                                        <li><a href="#">Perguntas Frequentes (FAQ)</a></li>

                                        <li><a href="#">Formas de pagamento e Entrega</a></li>

                                        <li><a href="#">Troca e Devolução</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-2 col-md-4 col-sm-6">

                            <div class="footer-widget">

                                <h4 class="footer-widget-title">Minha Conta</h4>



                                <div class="footer-widget-menu">

                                    <ul>

                                        <li><a href="#">Minha Conta</a></li>

                                        <li><a href="#">Minha Lista de Desejos</a></li>

                                        <li><a href="#">Entrar</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>



                        <!-- <div class="col-lg-2 col-md-4 col-sm-6">

                            <div class="footer-widget">

                                <h4 class="footer-widget-title">Customer Service</h4>



                                <div class="footer-widget-menu">

                                    <ul>

                                        <li><a href="my-account.html">My Account</a></li>

                                        <li><a href="#">Terms of Use</a></li>

                                        <li><a href="#">Deliveries & Returns</a></li>

                                        <li><a href="#">Gift card</a></li>

                                        <li><a href="#">Legal Notice</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div> -->



                    </div>

                </div>

            </div>

        </div>

        <!--Footer Section End-->



        <!--Copyright Section Start-->

        <div style="background: #498136;" class="copyright-section">

            <div class="container">

                <div class="copyright-wrapper text-center d-lg-flex align-items-center justify-content-between">



                    <!--Right Start-->

                    <div class="copyright-content">

                        <p>Copyright 2021 &copy; Lilos Green. Todos os direitos reservados</p>

                    </div>

                    <!--Right End-->



                    <!--Right Start-->

                    <div class="copyright-payment">

                        <img src="assets/images/payment.png" alt="">

                    </div>

                    <!--Right End-->



                </div>

            </div>

        </div>

        <!--Copyright Section End-->



        <!--Back To Start-->

        <a href="#" class="back-to-top">

            <i class="fa fa-angle-double-up"></i>

        </a>

        <!--Back To End-->



    </div>



    <!-- JS

    ============================================ -->



    <!-- Modernizer JS -->

    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>

    <!-- jQuery JS -->

    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS -->

    <script src="assets/js/vendor/popper.min.js"></script>

    <script src="assets/js/vendor/bootstrap.min.js"></script>



    <!-- Plugins JS -->

    <script src="assets/js/plugins/swiper-bundle.min.js"></script>

    <script src="assets/js/plugins/jquery.countdown.min.js"></script>

    <script src="assets/js/plugins/jquery.elevateZoom.min.js"></script>

    <script src="assets/js/plugins/select2.min.js"></script>

    <script src="assets/js/plugins/ajax-contact.js"></script>





    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <!-- <script src="assets/js/plugins.min.js"></script> -->



    <!-- Main JS -->

    <script src="assets/js/main.js"></script>





    <!-- Google Map js -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>

    <script src="assets/js/map-script.js"></script>



</body>



</html>