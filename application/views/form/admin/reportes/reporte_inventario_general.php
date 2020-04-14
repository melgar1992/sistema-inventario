<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Reportes</h3>
            </div>

            <div class="title_right">
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <h4>En el siguiente reporte se mostrara los datos del inventario de acuerdo a la categoria y la descripcion del producto</h4>
                        <br> </br>



                        <div class="ln_solid"></div>

                        </form>
                        <!-- Box de la tabla -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Reporte Inventario Categoria</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="example1" class="table table-bordered btn-hover">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Descripcion</th>
                                                    <th>Categoria</th>
                                                    <th>Stock</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($productos as $producto) : ?>

                                                    <tr>
                                                    
                                                       
                                                       
                                                        <td><?php echo $producto->nombre; ?></td>
                                                        <td><?php echo $producto->descripcion; ?></td>
                                                        <td><?php echo $producto->stock; ?></td>
                                                       
                                                        <td>
                                                        <?php endforeach; ?>

                                            </tbody>
                                        </table>
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
<!-- /page content -->