<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Reporte de Productos</h3>
            </div>

            <div class="title_right">
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Reporte</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">

                            <div class="col-md-12">
                                <table id="example" class="table table-bordered btn-hover">
                                    <thead>
                                        <tr>

                                            <th>Id_Categoria</th>
                                            <th>Descripcion</th>
                                            <th>Categoria</th>
                                            <th>Stock</th>
                                            <th>Precio</th>
                                            <th>Opciones</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($productos)) : ?>
                                            <?php foreach ($productos as $producto) : ?>
                                                <tr>
                                                    <td><?php echo $producto->id_categorias ?></td>
                                                    <td><?php echo $producto->nombre; ?></td>
                                                    <td><?php echo $producto->descripcion; ?></td>
                                                    <td><?php echo $producto->stock; ?></td>
                                                    <td><?php echo $producto->precio;?></td>

                                                    <td>

                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print">Imprimir</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

<div class="modal fade" id="modal-default">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">Informacion de la venta</h4>

            </div>

            <div class="modal-body">



            </div>

            <div class="modal-footer">




            </div>

        </div>

        <!-- /.modal-content -->

    </div>

    <!-- /.modal-dialog -->

</div>

<!-- /.modal -->