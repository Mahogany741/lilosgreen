<!doctype html>



<html class="no-js" lang="en">





<?php 





session_start();



?>



<head>



    <meta charset="utf-8">



    <meta http-equiv="x-ua-compatible" content="ie=edge">



    <title>Lilos Green - Formulário de Cadastro</title>



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





Api-CNPJ.php

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



                                <a href="index.html"><img src="assets/images/logo/logo.png" width="143" alt=""></a>



                            </div>



                        </div>



                        <div class="col-lg-7 position-static">



                            <div class="site-main-nav">



                                <nav class="site-nav">



                                    <ul>



                                        <li><a href="index.html">Home</a></li>



                                        <li><a href="produtos.html">Produtos</a></li>



                                        <li><a href="blog.html">Blog</a></li>



                                        <li>



                                            <a href="#">Cliente</a>



                                            <ul class="sub-menu">



                                                <li><a href="carrinho.html">Carrinho</a></li>



                                                <!-- <li><a href="checkout.html">Checkout</a></li> -->



                                                <li><a href="login.php">Login</a></li>



                                                <li><a href="minha-conta.html">Minha Conta</a></li>



                                                <li><a href="register.html">Registrar</a></li>



                                            </ul>



                                        </li>



                                        <li>



                                            <a href="area-do-parceiro.html">Parceiro</a>



                                            <ul class="sub-menu">



                                                <li><a href="area-do-parceiro.html">Área do Parceiro</a></li>



                                                <li><a href="formulario-de-cadastro.html">Cadastro de Parceiro</a></li>



                                                <li><a href="cadastro-produto.html">Cadastro de Produto</a></li>



                                                <li><a href="lista-produtos.html">Lista de Produtos</a></li>



                                            </ul>



                                        </li>



                                        <li>



                                            <a href="#">Sobre nós</a>



                                            <ul class="sub-menu">



                                                <li><a href="contact.html">Contato</a></li>



                                                <li><a href="about.html">Sobre Nós</a></li>



                                            </ul>



                                        </li>



                                    </ul>



                                </nav>



                            </div>



                        </div>



                        <div class="col-lg-3">



                            <div class="header-meta-info">



                                <div class="header-search">



                                    <form action="#">



                                        <input type="text" placeholder="Pesquise na loja">



                                        <button><i class="icon-search"></i></button>



                                    </form>



                                </div>



                                <div class="header-account">



                                    <div class="header-account-list dropdown top-link">



                                        <a href="#" role="button" data-toggle="dropdown"><i class="icon-users"></i></a>



        



                                        <ul class="dropdown-menu ">



                                            <li><a href="login.php">Login</a></li>



                                            <li><a href="minha-conta.html">Minha Conta</a></li>



                                            <li><a href="register.html">Registrar</a></li>



                                        </ul>



                                    </div>



                                    <div class="header-account-list dropdown mini-cart">



                                        <a href="carrinho.html" title="carrinho de compras">



                                            <i class="icon-shopping-bag"></i>



                                            <!-- <span class="item-count ">3</span> -->



                                        </a>



        



                                        <!-- <ul class="dropdown-menu ">



                                            <li class="product-cart">



                                                <div class="single-cart-box">



                                                    <div class="cart-img">



                                                        <a href="shop-single.html"><img src="assets/images/cart/cart-1.jpg" alt=""></a>



                                                        <span class="pro-quantity">1x</span>



                                                    </div>

Api-CNPJ.php

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



                                        </ul> -->



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



                                        <li><a href="login.php">Login</a></li>



                                        <li><a href="minha-conta.html">Minha Conta</a></li>



                                        <li><a href="register.html">Registrar</a></li>



                                    </ul>



                                </div>



                                <div class="header-account-list mini-cart">



                                    <a href="carrinho.html">



                                        <!-- <i class="icon-shopping-bag"></i>



                                        <span class="item-count ">0</span> -->



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



                        <li><a href="produtos.html">Produtos</a></li>



                        <li><a href="blog.html">Blog</a></li>



        



                        <li class="mega-dropdown">



                            <a class="mega-title" href="#">Cliente</a>



        



                            <ul class="mega-item">



                                <li><a href="carrinho.html">Carrinho</a></li>



                                <!-- <li><a href="checkout.html">Checkout</a></li> -->



                                <li><a href="login.php">Login</a></li>



                                <li><a href="minha-conta.html">Minha Conta</a></li>



                                <li><a href="register.html">Registrar</a></li>



                            </ul>



                        </li>



        



                        <li class="mega-item">



                            <a class="mega-title" href="#">Parceiro</a>



                            <ul class="mega-item">



                                <li><a href="area-do-parceiro.html">Area do Parceiro</a></li>



                                <li><a href="cadastro-produto.html">Cadastro de Produto</a></li>



                                <li><a href="formulario-de-cadastro.html">Cadastro de Parceiro</a></li>



                                <li><a href="lista-produtos.html">Lista de Produtos</a></li>



                                



                            </ul>



                        </li>



        



                        <li class="mega-item">



                            <a class="mega-title" href="#">Sobre Nós</a>



                            <ul class="mega-item">



                                <li><a href="contact.html">Contato</a></li>



                                <li><a href="about.html">Sobre Nós</a></li>



        



                                



                            </ul>



                        </li>



                        <!-- <li class="mega-dropdown">



                            <a class="menu-banner" href="#">



                                <img src="assets/images/menu-banner.jpg" alt="">



                            </a>



                        </li> -->



                    </ul>



                    </li>



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



                    <h2 class="title">Checkout</h2>



                    <ol class="breadcrumb justify-content-center">



                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>



                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>



                    </ol>



                </div>



            </div> -->



        </div>



        <!--Page Banner End-->







        <!--Register Start-->



        <div class="checkout-page section-padding-0">



            <div class="container">



                <div class="checkout-info mt-30">



                    <!-- <p class="info-header error"><i class="fa fa-exclamation-circle"></i> <strong>Erro:</strong> Você precisa estar logado.</p>-->



                </div>







                <div class="checkout-info mt-30">



                    <!-- <p class="info-header"> <i class="fa fa-exclamation-circle"></i> Já tem registro? <a data-toggle="collapse" href="#login">Clique aqui para fazer login</a></p>  -->







                    <div class="collapse" id="login">



                        <div class="card-body">



                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>



                            <form action="#">







                                <div class="row">



                                    <div class="col-lg-6">



                                        <div class="single-form">



                                            <label>Username or email *</label>



                                            <input type="email">



                                        </div>



                                    </div>



                                    <div class="col-lg-6">



                                        <div class="single-form">



                                            <label>Password</label>



                                            <input type="password">



                                        </div>



                                    </div>



                                </div>







                                <div class="single-form d-flex align-items-center">



                                    <button class="btn btn-primary">Login</button>



                                    <div class="cus-checkbox">



                                        <input type="checkbox" id="remember">



                                        <label for="remember"><span></span> Remember Me</label>



                                    </div>



                                </div>



                                <div class="forget">



                                    <a href="#">Lost Your Password</a>



                                </div>



                            </form>



                        </div>



                    </div>



                </div>







                <div class="checkout-info mt-30">



                    <!-- <p class="info-header"> <i class="fa fa-exclamation-circle"></i> Tem um cupom? <a data-toggle="collapse" href="#coupon">Clique aqui para validar seu código</a></p> -->







                    <div class="collapse" id="coupon">



                        <div class="card-body">



                            <form action="#">



                                <div class="row">



                                    <div class="col-lg-6">



                                        <div class="single-form">



                                            <input type="email" placeholder="Coupon code">



                                        </div>



                                    </div>



                                    <div class="col-lg-6">



                                        <div class="single-form">



                                            <button class="btn btn-primary">Login</button>



                                        </div>



                                    </div>



                                </div>



                            </form>



                        </div>



                    </div>



                </div>







                <form action="#">



                    <div class="row">



                        <div class="col-lg-12">



                            <div class="checkout-form mt-30">







                                <div class="checkout-title">



                                    <h4 class="title">Insira as informações abaixo:</h4>



                                </div>







                                <div class="row">



                                    <div class="col-sm-6">



                                        <div class="single-form">



                                            <label>Primeiro nome *</label>



                                            <input type="text">



                                        </div>



                                    </div>



                                    <div class="col-sm-6">



                                        <div class="single-form">



                                            <label>Sobrenome *</label>



                                            <input type="text">



                                        </div>



                                    </div>



                                    <!-- <div class="col-sm-12">



                                        <div class="single-form">



                                            <label>Nome da Empresa</label>



                                            <input type="text">



                                        </div>



                                    </div>



                                    <div class="col-sm-12">



                                        <div class="single-select2">



                                            <label>País *</label>







                                            <div class="form-select2">



                                                <select class="select2">



                                                    <option value="0">Selecione um país…</option>



                                                    <option value="1">Brasil</option>



                                                    <option value="2">Canada</option>



                                                    <option value="3">Colombia</option>



                                                    <option value="4">Indonesia</option>



                                                    <option value="5">Italy</option>



                                                    <option value="6">Pakistan</option>



                                                    <option value="7">Turkey</option>



                                                </select>



                                            </div>



                                        </div>



                                    </div>



                                    <div class="col-sm-12">



                                        <div class="single-form">



                                            <label>Endereço *</label>



                                            <input type="text" placeholder="Número da casa e nome da rua">



                                            <input type="text" placeholder="Apartamento, suíte, unidade etc.(opcional)">



                                        </div>



                                    </div>



                                    <div class="col-sm-12">



                                        <div class="single-form">



                                            <label>Cidade *</label>



                                            <input type="text">



                                        </div>



                                    </div>



                                    <div class="col-sm-12">



                                        <div class="single-select2">



                                            <label>Bairro *</label>







                                            <div class="form-select2">



                                                <select class="select2">



                                                    <option value="">Selecione uma opção…</option>



                                                    <option value="BAG">Bagerhat</option>



                                                    <option value="BAN">Bandarban</option>



                                                    <option value="BAR">Barguna</option>



                                                    <option value="BARI">Barisal</option>



                                                    <option value="BHO">Bhola</option>



                                                    <option value="BOG">Bogra</option>



                                                    <option value="BRA">Brahmanbaria</option>



                                                    <option value="CHA">Chandpur</option>



                                                    <option value="CHI">Chittagong</option>



                                                    <option value="CHU">Chuadanga</option>



                                                    <option value="COM">Comilla</option>



                                                    <option value="COX">Cox's Bazar</option>



                                                    <option value="DHA">Dhaka</option>



                                                    <option value="DIN">Dinajpur</option>



                                                    <option value="FAR">Faridpur </option>



                                                    <option value="FEN">Feni</option>



                                                    <option value="GAI">Gaibandha</option>



                                                    <option value="GAZI">Gazipur</option>



                                                    <option value="GOP">Gopalganj</option>



                                                    <option value="HAB">Habiganj</option>



                                                    <option value="JAM">Jamalpur</option>



                                                    <option value="JES">Jessore</option>



                                                    <option value="JHA">Jhalokati</option>



                                                    <option value="JHE">Jhenaidah</option>



                                                    <option value="JOY">Joypurhat</option>



                                                    <option value="KHA">Khagrachhari</option>



                                                    <option value="KHU">Khulna</option>



                                                    <option value="KIS">Kishoreganj</option>



                                                    <option value="KUR">Kurigram</option>



                                                    <option value="KUS">Kushtia</option>



                                                    <option value="LAK">Lakshmipur</option>



                                                    <option value="LAL">Lalmonirhat</option>



                                                    <option value="MAD">Madaripur</option>



                                                    <option value="MAG">Magura</option>



                                                    <option value="MAN">Manikganj </option>



                                                    <option value="MEH">Meherpur</option>



                                                    <option value="MOU">Moulvibazar</option>



                                                    <option value="MUN">Munshiganj</option>



                                                    <option value="MYM">Mymensingh</option>



                                                    <option value="NAO">Naogaon</option>



                                                    <option value="NAR">Narail</option>



                                                    <option value="NARG">Narayanganj</option>



                                                    <option value="NARD">Narsingdi</option>



                                                    <option value="NAT">Natore</option>



                                                    <option value="NAW">Nawabganj</option>



                                                    <option value="NET">Netrakona</option>



                                                    <option value="NIL">Nilphamari</option>



                                                    <option value="NOA">Noakhali</option>



                                                    <option value="PAB">Pabna</option>



                                                    <option value="PAN">Panchagarh</option>



                                                    <option value="PAT">Patuakhali</option>



                                                    <option value="PIR">Pirojpur</option>



                                                    <option value="RAJB">Rajbari</option>



                                                    <option value="RAJ">Rajshahi</option>



                                                    <option value="RAN">Rangamati</option>



                                                    <option value="RANP">Rangpur</option>



                                                    <option value="SAT">Satkhira</option>



                                                    <option value="SHA">Shariatpur</option>



                                                    <option value="SHE">Sherpur</option>



                                                    <option value="SIR">Sirajganj</option>



                                                    <option value="SUN">Sunamganj</option>



                                                    <option value="SYL">Sylhet</option>



                                                    <option value="TAN">Tangail</option>



                                                    <option value="THA">Thakurgaon</option>



                                                </select>



                                            </div>



                                        </div>



                                    </div> -->



                                    <div class="col-sm-6">



                                        <div class="single-form">



                                            <label>Celular *</label>



                                            <input type="text">



                                        </div>



                                    </div>



                                    <div class="col-sm-6">



                                        <div class="single-form">



                                            <label>Endereço de E-mail *</label>



                                            <input type="text">



                                        </div>



                                    </div>



                                    <div class="col-sm-6">



                                        <div class="single-select2">



                                            <label>Tipo de Pessoa*</label>



                                            <div class="form-select2">



                                                <select class="select2">



                                                    <option value="">Selecione uma opção…</option>



                                                    <option value="BAG">Física</option>



                                                    <option value="BAN">Jurídica</option>



                                                </select>



                                            </div>



                                        </div>



                                    </div>



                                    <div class="col-sm-6">



                                        <div class="single-select2">



                                            <label>Data de nascimento (pessoa física)*</label>



                                            <input type="date">



                                        </div>



                                    </div>



                                    <div class="col-sm-12">



                                        <div class="single-select2">



                                            <label>Crie uma senha</label>



                                            <input type="password">



                                        </div>



                                    </div>



                                    <div class="checkout-title mt-3">



                                        <h4 class="title">Informações da empresa:</h4>

    

                                    </div>



                                    <div class="col-sm-6">



                                        <div class="single-form">



                                            <label>Razão Social *</label>



                                            <input type="text" value="<?php echo $_SESSION['Razao_Social']; ?>" disabled>



                                        </div>



                                    </div>



                                    <div class="col-sm-6">



                                        <div class="single-form">



                                            <label>Nome Fantasia *</label>



                                            <input type="text" value="<?php echo $_SESSION['Nome_Fantasia']; ?>" disabled>



                                        </div>



                                    </div>



                                    <div class="col-sm-4">



                                        <div class="single-form">



                                            <label>Endereço *</label>



                                            <input type="text" value="<?php echo $_SESSION['endereco']; ?>" disabled>



                                        </div>



                                    </div>



                                    <div class="col-sm-4">



                                        <div class="single-form">



                                            <label>Bairro *</label>



                                            <input type="text" value="<?php echo $_SESSION['Bairro']; ?>" disabled>



                                        </div>



                                    </div>



                                    <div class="col-sm-4">



                                        <div class="single-form">



                                            <label>Complemento</label>



                                            <input type="text" value="<?php echo $_SESSION['complemento']; ?>" disabled>



                                        </div>



                                    </div>



                                    <div class="col-sm-4">



                                        <div class="single-form">



                                            <label>Código Postal / CEP</label>



                                            <input type="text" value="<?php echo $_SESSION['cep']; ?>" disabled>



                                        </div>



                                    </div>



                                    <div class="col-sm-4">



                                        <div class="single-form">



                                            <label>Cidade *</label>



                                            <input type="text" value="<?php echo $_SESSION['Cidade']; ?>" disabled>



                                        </div>



                                    </div>



                                    <div class="col-sm-4">



                                        <div class="single-form">



                                            <label>UF *</label>



                                            <input type="text" value="<?php echo $_SESSION['Cidade']; ?>" disabled>



                                        </div>



                                    </div>





                                    <div class="cart-form-btn">

                                        <button style="line-height: 38px; margin-top:10px; border-radius: 3px; height: 40px; width: 100%;" class="btn btn-success">Cadastrar</button>

                                    </div>



                                </div>







                                <div class="cus-checkbox checkout-checkbox">



                                    <input type="checkbox" id="account">



                                    <label for="account"><span></span> O e-mail informado será usado para comicação e envio de documentos necessários para finalização de registro</label> 



                                </div>



                                



                                <br>



                                <p>*ATENÇÃO - Encaminharemos uma mensagem no e-mail enviado, será solicitado o comprovante de empresa ou em caso de pessoa física será necessário envio de documento com foto, também será solicitada envios de fotos do local de cultivo e comprovação de endereço.



                                Após o mesmo passar pela análise de documentação, será necessária uma triagem de qualidade referente aos produtos fornecidos.</p>   



                                <!-- <div class="checkout-account">



                                    <div class="single-form">



                                        <label>Create account Password *</label>



                                        <input type="password" placeholder="Password">



                                    </div>



                                </div> -->







                                <!-- <div class="cus-checkbox checkout-checkbox">



                                    <input type="checkbox" id="shipping">



                                    <label for="shipping"><span></span> A entrega será para outro endereço? caso sim, marque a opção e informe os dados necessários.</label>



                                </div> -->







                                <!-- <div class="checkout-shipping">



                                    <div class="row">



                                        <div class="col-sm-6">



                                            <div class="single-form">



                                                <label>Primeiro nome *</label>



                                                <input type="text">



                                            </div>



                                        </div>



                                        <div class="col-sm-6">



                                            <div class="single-form">



                                                <label>Sobrenome *</label>



                                                <input type="text">



                                            </div>



                                        </div>



                                        <div class="col-sm-12">



                                            <div class="single-form">



                                                <label>Nome da Empresa</label>



                                                <input type="text">



                                            </div>



                                        </div>



                                        <div class="col-sm-12">



                                            <div class="single-select2">



                                                <label>País *</label>







                                                <div class="form-select2">



                                                    <select class="select2">



                                                        <option value="0">Select um país...</option>



                                                        <option value="1">Brasil</option>



                                                        <option value="2">Canada</option>



                                                        <option value="3">Colombia</option>



                                                        <option value="4">Indonesia</option>



                                                        <option value="5">Italy</option>



                                                        <option value="6">Pakistan</option>



                                                        <option value="7">Turkey</option>



                                                    </select>



                                                </div>



                                            </div>



                                        </div>



                                        <div class="col-sm-12">



                                            <div class="single-form">



                                                <label>Endereço *</label>



                                                <input type="text" placeholder="Número da casa e nome da rua">



                                                <input type="text" placeholder="Apartamento, suíte, unidade etc. (opcional)">



                                            </div>



                                        </div>



                                        <div class="col-sm-12">



                                            <div class="single-form">



                                                <label>Cidade *</label>



                                                <input type="text">



                                            </div>



                                        </div>



                                        <div class="col-sm-12">



                                            <div class="single-select2">



                                                <label>Bairro *</label>







                                                <div class="form-select2">



                                                    <select class="select2">



                                                        <option value="">Select uma opção…</option>



                                                        <option value="BAG">Bagerhat</option>



                                                        <option value="BAN">Bandarban</option>



                                                        <option value="BAR">Barguna</option>



                                                        <option value="BARI">Barisal</option>



                                                        <option value="BHO">Bhola</option>



                                                        <option value="BOG">Bogra</option>



                                                        <option value="BRA">Brahmanbaria</option>



                                                        <option value="CHA">Chandpur</option>



                                                        <option value="CHI">Chittagong</option>



                                                        <option value="CHU">Chuadanga</option>



                                                        <option value="COM">Comilla</option>



                                                        <option value="COX">Cox's Bazar</option>



                                                        <option value="DHA">Dhaka</option>



                                                        <option value="DIN">Dinajpur</option>



                                                        <option value="FAR">Faridpur </option>



                                                        <option value="FEN">Feni</option>



                                                        <option value="GAI">Gaibandha</option>



                                                        <option value="GAZI">Gazipur</option>



                                                        <option value="GOP">Gopalganj</option>



                                                        <option value="HAB">Habiganj</option>



                                                        <option value="JAM">Jamalpur</option>



                                                        <option value="JES">Jessore</option>



                                                        <option value="JHA">Jhalokati</option>



                                                        <option value="JHE">Jhenaidah</option>



                                                        <option value="JOY">Joypurhat</option>



                                                        <option value="KHA">Khagrachhari</option>



                                                        <option value="KHU">Khulna</option>



                                                        <option value="KIS">Kishoreganj</option>



                                                        <option value="KUR">Kurigram</option>



                                                        <option value="KUS">Kushtia</option>



                                                        <option value="LAK">Lakshmipur</option>



                                                        <option value="LAL">Lalmonirhat</option>



                                                        <option value="MAD">Madaripur</option>



                                                        <option value="MAG">Magura</option>



                                                        <option value="MAN">Manikganj </option>



                                                        <option value="MEH">Meherpur</option>



                                                        <option value="MOU">Moulvibazar</option>



                                                        <option value="MUN">Munshiganj</option>



                                                        <option value="MYM">Mymensingh</option>



                                                        <option value="NAO">Naogaon</option>



                                                        <option value="NAR">Narail</option>



                                                        <option value="NARG">Narayanganj</option>



                                                        <option value="NARD">Narsingdi</option>



                                                        <option value="NAT">Natore</option>



                                                        <option value="NAW">Nawabganj</option>



                                                        <option value="NET">Netrakona</option>



                                                        <option value="NIL">Nilphamari</option>



                                                        <option value="NOA">Noakhali</option>



                                                        <option value="PAB">Pabna</option>



                                                        <option value="PAN">Panchagarh</option>



                                                        <option value="PAT">Patuakhali</option>



                                                        <option value="PIR">Pirojpur</option>



                                                        <option value="RAJB">Rajbari</option>



                                                        <option value="RAJ">Rajshahi</option>



                                                        <option value="RAN">Rangamati</option>



                                                        <option value="RANP">Rangpur</option>



                                                        <option value="SAT">Satkhira</option>



                                                        <option value="SHA">Shariatpur</option>



                                                        <option value="SHE">Sherpur</option>



                                                        <option value="SIR">Sirajganj</option>



                                                        <option value="SUN">Sunamganj</option>



                                                        <option value="SYL">Sylhet</option>



                                                        <option value="TAN">Tangail</option>



                                                        <option value="THA">Thakurgaon</option>



                                                    </select>



                                                </div>



                                            </div>



                                        </div>



                                        <div class="col-sm-12">



                                            <div class="single-form">



                                                <label>Código Postal / CEP</label>



                                                <input type="text">



                                            </div>



                                        </div>



                                        <div class="col-sm-6">



                                            <div class="single-form">



                                                <label>Telefone *</label>



                                                <input type="text">



                                            </div>



                                        </div>



                                        <div class="col-sm-6">



                                            <div class="single-form">



                                                <label>Endereço de e-mail *</label>



                                                <input type="text">



                                            </div>



                                        </div>



                                    </div>



                                </div> -->







                                <div class="single-form checkout-note">



                                    <label>Notas e observações</label>



                                    <textarea placeholder="*Por favor, nesse campo, deixe a descrição sobre seu negócio ou produção, é importante enfatizar os processos e o volume da sua produção*"></textarea>



                                </div>



                            </div>



                        </div>



                        <!-- <div class="col-lg-5">



                            <div class="checkout-review-order mt-30">



                                <div class="checkout-title">



                                    <h4 class="title">Detalhes da compra</h4>



                                </div>







                                <div class="checkout-review-order-table table-responsive mt-15">



                                    <table class="table">



                                        <thead>



                                            <tr>



                                                <th class="Product-name">Produto</th>



                                                <th class="Product-price">Total</th>



                                            </tr>



                                        </thead>



                                        <tbody>



                                            <tr>



                                                <td class="Product-name">



                                                    <p>Item teste</p>



                                                </td>



                                                <td class="Product-price">



                                                    <p>R$ 00,00</p>



                                                </td>



                                            </tr>



                                            <tr>



                                                <td class="Product-name">



                                                    <p>Item teste</p>



                                                </td>



                                                <td class="Product-price">



                                                    <p>R$ 00,00</p>



                                                </td>



                                            </tr>



                                            <tr>



                                                <td class="Product-name">



                                                    <p>Item teste</p>



                                                </td>



                                                <td class="Product-price">



                                                    <p>R$ 00,00</p>



                                                </td>



                                            </tr>



                                            <tr>



                                                <td class="Product-name">



                                                    <p>Item teste</p>



                                                </td>



                                                <td class="Product-price">



                                                    <p>R$ 00,00</p>



                                                </td>



                                            </tr>



                                        </tbody>



                                        <tfoot>



                                            <tr>



                                                <td class="Product-name">



                                                    <p>Subtotal</p>



                                                </td>



                                                <td class="Product-price">



                                                    <p>R$ 00,00</p>



                                                </td>



                                            </tr>



                                            <tr>



                                                <td class="Product-name">



                                                    <p>Transporte</p>



                                                </td>



                                                <td class="Product-price">



                                                    <ul class="shipping-list">



                                                        <li class="cus-radio">



                                                            <input type="radio" name="shipping" id="radio1" checked>



                                                            <label style="margin-left: auto;" for="radio1"> <span style="margin-left: 20px;">Taxa Fixa</span></label>



                                                        </li>



                                                        <li class="cus-radio">



                                                            <input type="radio" name="shipping" id="radio2">



                                                            <label style="margin-left: auto;" for="radio2"> <span style="margin-left: 5px;">Frete grátis</span></label>



                                                        </li>



                                                        <li class="cus-radio">



                                                            <input type="radio" name="shipping" id="radio3">



                                                            <label style="margin-left: auto;" for="radio3"> <span style="margin-left: 25px;">Retirada</span></label>



                                                        </li>



                                                    </ul>



                                                </td>



                                            </tr>



                                            <tr>



                                                <td class="Product-name">



                                                    <p>Total</p>



                                                </td>



                                                <td class="total-price">



                                                    <p>R$ 00,00</p>



                                                </td>



                                            </tr>



                                        </tfoot>



                                    </table>



                                </div> -->







                                <!-- <div class="checkout-payment">



                                    <ul>



                                        <li>



                                            <div class="single-payment">



                                                <div class="payment-radio cus-radio">



                                                    <input type="radio" name="radio" id="bank">



                                                    <label for="bank"><span></span> Transferência bancária </label>







                                                    <div class="payment-details">



                                                        <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>



                                                    </div>



                                                </div>



                                            </div>



                                        </li>



                                        <li>



                                            <div class="single-payment">



                                                <div class="payment-radio cus-radio">



                                                    <input type="radio" name="radio" id="check">



                                                    <label for="check"><span></span> Verificar pagamentos </label>







                                                    <div class="payment-details">



                                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>



                                                    </div>



                                                </div>



                                            </div>



                                        </li>



                                        <li>



                                            <div class="single-payment">



                                                <div class="payment-radio cus-radio">



                                                    <input type="radio" name="radio" id="cash" checked="checked">



                                                    <label for="cash"><span></span> Pagamento na entrega</label>







                                                    <div class="payment-details">



                                                        <p>Pague em dinheiro na entrega.</p>



                                                    </div>



                                                </div>



                                            </div>



                                        </li>



                                        <li>



                                            <div class="single-payment">



                                                <div class="payment-radio cus-radio">



                                                    <input type="radio" name="radio" id="paypal">



                                                    <label for="paypal"><span></span> Paypal <img class="payment" src="assets/images/payment-2.png" alt=""> <a href="#">O que é Paypal?</a></label>







                                                    <div class="payment-details">



                                                        <p>Pague via PayPal, você pode pagar com cartão de crédito se não tiver uma conta do PayPal.</p>



                                                    </div>



                                                </div>



                                            </div>



                                        </li>



                                    </ul>







                                    <div class="checkout-btn">



                                        <a class="btn btn-primary btn-block" href="#">FAZER O PEDIDO</a>



                                    </div>



                                </div> 



                            </div>



                        </div>-->



                    </div>



                </form>



            </div>



        </div>



        <!--Register End-->











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