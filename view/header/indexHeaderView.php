<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pymes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]>
    <meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/sweetalert2.css" rel="stylesheet">

    <link href="assets/themes/css/bootstrappage.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">

    <!-- global styles -->
    <link href="assets/themes/css/flexslider.css" rel="stylesheet"/>
    <link href="assets/themes/css/main.css" rel="stylesheet"/>

    <?php

    session_cache_limiter();
    session_name('index');
    session_start();

    ?>

</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form">
                <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
            </form>
        </div>
        <div class="span8">
            <div class="account pull-right">
                <ul class="user-menu">
                    <?php if (isset($user) || isset($_SESSION["user"])) { ?>
                        <li><a href="<?php echo $helper->url("usuarios", "getProfile"); ?>">Mi Perfil</a></li>
                        <li><a href="#">Mis compras</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo $helper->url("usuarios", "getLogin"); ?>">Iniciar Sesión</a></li>
                        <li><a href="<?php echo $helper->url("usuarios", "getRegister"); ?>">Registrarse</a></li>
                    <?php } ?>
                    <li id="contador" class="contador">
                        <form action="<?php echo $helper->url("usuarios", "order"); ?>" method="post">
                            <div style="display: none;">
                                <div id="contenido"></div>
                            </div>
                            <a href="#">
                                <button class="btn btn-primary" type="submit" id="suma"> 0</button>
                            </a>
                        </form>
                    </li>
                    <li><img src="assets/themes/images/PrincipalS/logocarrito.jpg" class="site_logo" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">

            <a href="<?php echo $helper->url("usuarios","index"); ?>" class="logo pull-left"><img
                        src="assets/themes/images/PrincipalS/logof.jpg"
                        class="site_logo" alt=""></a>


            <nav id="menu" class="pull-right">
                <?php if (isset($user) || isset($_SESSION["user"])) { ?>
                    <ul>
                        <li><a href="<?php session_destroy(); ?>">Salir</a></li>
                    </ul>
                <?php } ?>
            </nav>
        </div>
    </section>