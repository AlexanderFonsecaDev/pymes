<?php include 'view/header/dashHeaderView.php' ?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Estado General</h1>

    <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="img/icons/003-money.png"
                 width="200" height="200" class="img-circle img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="escala">Ventas</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="img/icons/001-user.png"
                 width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="escala">Clientes</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="img/icons/002-barcode.png"
                 width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="escala">Productos</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="img/icons/001-archive.png"
                 width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="escala">Pedidos</h4>
        </div>
    </div>

    <h2 class="sub-header">Informacion Basica</h2>


    <div class="table-responsive col-md-6">
        <h2>Productos</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Existencias</th>
                <th>Precio</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
            </tr>
            </tbody>
        </table>
    </div>


    <div class="table-responsive col-md-6">
        <h2>Clientes</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>cedula</th>
                <th>nombre</th>
                <th>correo</th>
                <th>telefono</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            </tbody>
        </table>
    </div>


    <div class="table-responsive col-md-6">
        <h2>Ventas</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th># Factura</th>
                <th># Pedido</th>
                <th>Fecha</th>
                <th>Cedula Cliente</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="table-responsive col-md-6">
        <h2>Pedidos</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th># Pedido</th>
                <th>Fecha</th>
                <th>Cantidad Producto</th>
                <th>Estado</th>
                <th>Cedula cliente</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            </tbody>
        </table>
    </div>


</div>
</div>
</div>

<?php include 'view/footer/dashFooterView.php' ?>
</body>
</html>
