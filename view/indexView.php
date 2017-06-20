<?php include 'view/header/indexHeaderView.php' ?>

<section class="homepage-slider" id="home-slider">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="assets/themes/images/PrincipalS/sp2.jpg" alt=""/>
            </li>
            <li>

                <img src="assets/themes/images/Producto/sp2.jpg" alt=""/>
                <div class="intro">
                    <h1>Los Mejores Productos</h1>
                    <p><span>La mejor calidad y  gran variedad</span></p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="header_text">
    KWIK - E - MART, Te ofrece los mejores productos y con una gran variedad
    <br/>Realizas tus compras ¡Ahora!
</section>
<section class="main-content">
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><span class="line">Productos</span></span></span>
                        <span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a
                                    class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
                    </h4>
                    <div id="myCarousel" class="myCarousel carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
                                <ul class="thumbnails">

                                    <?php if (isset($allproducts) && count($allproducts) >= 1) { ?>
                                        <?php foreach ($allproducts as $product) { ?>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <p><a href="#"><img src="<?php echo $product->url; ?>"
                                                                        alt="<?php echo $product->Descripcion; ?>"></a>
                                                    </p>
                                                    <a href="#" class="title"><?php echo $product->Nombre; ?></a><br/>
                                                    <a href="#"
                                                       class="category"><?php echo $product->Descripcion; ?></a>
                                                    <p class="price"><?php echo $product->Precio_venta; ?></p>
                                                    <button class="btn btn-inverse" type="button" id="añadir"
                                                            onclick='agregar(<?php echo $product->Id ?>)'>+ Añadir +
                                                    </button>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
        </div>
    </div>
</section>
<section class="our_client">
    <h4 class="title"><span class="text">Manufactures</span></h4>
    <div class="row">
        <div class="span3">
            <a href="#"><img alt="" src="assets/themes/images/marcas/colg.jpg"></a>
        </div>
        <div class="span3">
            <a href="#"><img alt="" src="assets/themes/images/marcas/ponds.jpg"></a>
        </div>
        <div class="span3">
            <a href="#"><img alt="" src="assets/themes/images/marcas/pyg.jpg"></a>
        </div>
        <div class="span3">
            <a href="#"><img alt="" src="assets/themes/images/marcas/zenu.gif"></a>
        </div>


    </div>
</section>

<?php include 'view/footer/indexFooterView.php' ?>
