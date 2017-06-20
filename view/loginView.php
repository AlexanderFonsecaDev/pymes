<?php include 'view/header/indexHeaderView.php' ?>

        <section class="header_text sub">
            <img class="pageBanner" src="assets/themes/images/PrincipalS/logoini.jpg" alt="New products">

        </section>

        <section class="main-content">

            <div class="row">

                <div class="span4"></div>
                <div class="span4">
                    <div class="accordion" id="accordion2">
                        <div class="accordion-group">

                            <div class="accordion-heading" align="center">

                                <div align="center">

                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                       href="#collapseOne">Iniciar sesión</a>
                                </div>
                            </div>

                            <div id="collapseOne" class="accordion-body in collapse">
                                <div class="accordion-inner">
                                    <div class="row-fluid">
                                        <div class="center">
                                            <form action="<?php echo $helper->url("usuarios","login"); ?>" method="post">
                                                <fieldset>
                                                    <div class="control-group">
                                                        <label class="control-label">Nick</label>
                                                        <div class="controls">
                                                            <input type="text" placeholder="Nick o correo" name="nick" id="username" class="input-xlarge">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Contraseña</label>
                                                        <div class="controls">
                                                            <input type="password" placeholder="Contraseña" name="password" id="password" class="input-xlarge">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-inverse">iniciar Sesión</button>
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