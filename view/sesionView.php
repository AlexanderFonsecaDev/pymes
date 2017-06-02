<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap E-commerce Templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="include/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="include/themes/css/bootstrappage.css" rel="stylesheet"/>

    <!-- global styles -->
    <link href="include/themes/css/flexslider.css" rel="stylesheet"/>
    <link href="include/themes/css/main.css" rel="stylesheet"/>

    <!-- scripts -->
    <script src="include/themes/js/jquery-1.7.2.min.js"></script>
    <script src="include/bootstrap/js/bootstrap.min.js"></script>
    <script src="include/themes/js/superfish.js"></script>
    <script src="include/themes/js/jquery.scrolltotop.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
                    <li><a href="#">My Account</a></li>
                    <li><a href="cart.html">Your Cart</a></li>
                    <li><a href="<?php echo $helper->url("clientes","sesion") ?>">Iniciar Sesión</a></li>
                    <li><a href="<?php echo $helper->url("clientes","registrarCliente")?> ">Registrarse</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">

            <a href="index.html" class="logo pull-left"><img src="include/themes/images/logo.png" class="site_logo" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul>
                    <li><a href="./products.html">Woman</a>
                        <ul>
                            <li><a href="./products.html">Lacinia nibh</a></li>
                            <li><a href="./products.html">Eget molestie</a></li>
                            <li><a href="./products.html">Varius purus</a></li>
                        </ul>
                    </li>
                    <li><a href="./products.html">Man</a></li>
                    <li><a href="./products.html">Sport</a>
                        <ul>
                            <li><a href="./products.html">Gifts and Tech</a></li>
                            <li><a href="./products.html">Ties and Hats</a></li>
                            <li><a href="./products.html">Cold Weather</a></li>
                        </ul>
                    </li>
                    <li><a href="./products.html">Hangbag</a></li>
                    <li><a href="./products.html">Best Seller</a></li>
                    <li><a href="./products.html">Top Seller</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="header_text sub">
        <img class="pageBanner" src="include/themes/images/pageBanner.png" alt="New products" >

    </section>
    <section class="main-content">
        <div class="row">
            <div class="span12">
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">

                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Iniciar sesión</a>
                        </div>
                        <div id="collapseOne" class="accordion-body in collapse">
                            <div class="accordion-inner">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <div class="control-group">
                                                    <label class="control-label">Nick</label>
                                                    <div class="controls">
                                                        <input type="text" placeholder="Nick o correo" id="username" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Contraseña</label>
                                                    <div class="controls">
                                                        <input type="password" placeholder="Contraseña" id="password" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <button class="btn btn-inverse">iniciar Sesión</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="footer-bar">
        <div class="row">
            <div class="span3">
                <h4>   Facebook</h4>
                <img src="include/themes/images/PrincipalS/facebook.png " width="110">
                <h4> Kwik E Mart</h4>
            </div>
            <div class="center">
                <h4>Instagram</h4>
                <br>
                <img src="include/themes/images/PrincipalS/instagram.png " width="80">
                <h4>Kwik E Mart</h4>
            </div>


        </div>
    </section>
</div>
<script src="include/themes/js/common.js"></script>
</body>
</html>