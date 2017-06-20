<?php include 'view/header/indexHeaderView.php' ?>

<img class="center" src="assets/themes/images/PrincipalS/logoini.jpg" alt="">

<br>
<section class="main-content">
    <br>
    <div class="row">

        <div class="span4"></div>
        <div class="span4">
            <div class="accordion" id="accordion2">
                <div class="accordion-group">

                    <div class="accordion-heading" align="center">

                        <div align="center">

                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#collapseOne">MI PERFIL</a>
                        </div>
                    </div>

                    <div id="collapseOne" class="accordion-body in collapse">
                        <div class="accordion-inner">
                            <div class="row-fluid">
                                <div class="center">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label">Nombre</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Ingrese sus nombres"
                                                           class="input-xlarge" disabled>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Apellido</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Ingrese sus apellidos"
                                                           class="input-xlarge" disabled>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Nick:</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Ingrese su nick"
                                                           class="input-xlarge" disabled>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Contraseña:</label>
                                                <div class="controls">
                                                    <input type="password" placeholder="Ingrese su contraseña"
                                                           class="input-xlarge" disabled>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Correo:</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Ingrese su correo"
                                                           class="input-xlarge" disabled>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Telefono:</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="Ingrese su telefono"
                                                           class="input-xlarge" disabled>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                            </div>
                                            <hr>
                                            <div>
                                                <a href="Actualizarinfo.html" class="btn btn-inverse">Actualizar</a>
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
