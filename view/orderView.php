<?php include 'view/header/indexHeaderView.php' ?>

<section class="main-content">

    <div class="row">
        <div class="span2"></div>
        <div class="span8">
            <div class="accordion" id="accordion2">
                <div class="accordion-group">

                    <div class="accordion-heading" align="center">

                        <div align="center">

                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#collapseOne">Mis Compras</a>
                        </div>
                    </div>

                    <div id="collapseOne" class="accordion-body in collapse">
                        <div class="accordion-inner">
                            <div class="row-fluid">
                                <div class="center">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <div class="control-group">

                                                <?php if (isset($user) || isset($_SESSION["user"])) { ?>
                                                    <div class="controls">
                                                        <h2> Verifica tu pedido </h2>
                                                        <table class="table">
                                                            <thead class="thead-inverse">
                                                            <tr>
                                                                <th>Nombre</th>
                                                                <th>Descripcion</th>
                                                                <th>Precio</th>
                                                            </tr>
                                                            </thead>
                                                            <?php $total = 0; ?>
                                                            <?php if (isset($allOrder)) { ?>
                                                                <?php foreach ($allOrder as $order) { ?>


                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $order[0]->Nombre; ?></th>
                                                                        <td><?php echo $order[0]->Descripcion; ?></td>
                                                                        <td><?php echo $order[0]->Precio_venta; ?></td>
                                                                        <?php $total += $order[0]->Precio_venta ?>
                                                                    </tr>
                                                                    </tbody>

                                                                <?php } ?>
                                                            <?php } ?>
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">Total</th>
                                                                <td></td>
                                                                <td><?php echo $total ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <a href="<?php echo $helper->url("usuarios", "index"); ?>""
                                                        class="btn btn-inverse">Atras</a>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="controls">
                                                        <h2> Inicia Session para Comprar</h2>
                                                        <table class="table">
                                                            <thead class="thead-inverse">
                                                            <tr>
                                                                <th>Nombre</th>
                                                                <th>Descripcion</th>
                                                                <th>Precio</th>
                                                            </tr>
                                                            </thead>
                                                            <?php $total = 0; ?>
                                                            <?php if (isset($allOrder)) { ?>
                                                                <?php foreach ($allOrder as $order) { ?>


                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $order[0]->Nombre; ?></th>
                                                                        <td><?php echo $order[0]->Descripcion; ?></td>
                                                                        <td><?php echo $order[0]->Precio_venta; ?></td>
                                                                        <?php $total += $order[0]->Precio_venta ?>
                                                                    </tr>
                                                                    </tbody>

                                                                <?php } ?>
                                                            <?php } ?>
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">Total</th>
                                                                <td></td>
                                                                <td><?php echo $total ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="<?php echo $helper->url("usuarios", "index"); ?>""
                                                        class="btn btn-inverse">Atras</a>
                                                    </div>
                                                <?php } ?>
                                            </div>
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


<?php include 'view/footer/indexFooterView.php' ?>
