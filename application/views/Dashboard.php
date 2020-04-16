    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">

          </div>

          <div class="title_right">
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Dashboard inventario</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="row tile_count">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-money"></i> Valor de inventario actual</span>
                    <div class="count green">2500</div>
                    <span class="count_bottom"><i class="green">4% </i> Cantidad items</span>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-money"></i> Valor de inventario en proyectos</span>
                    <div class="count red">123.50</div>
                    <span class="count_bottom"><i class="green"><i class=""></i>3% </i>Cantidad items</span>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-money"></i> Valor de inventario en almacen</span>
                    <div class="count green">2,500</div>
                    <span class="count_bottom"><i class="green"><i class=""></i>34% </i>Cantidad items</span>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-money"></i> Valor items descartados</span>
                    <div class="count red">4,567</div>
                    <span class="count_bottom"><i class="red"><i class=""></i>12% </i> Cantidad items</span>
                  </div>

                </div>
              </div>
              <div class="">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2><i class="fa fa-bars"></i> Tablas de reportes</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Tabla de productos</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Tabla salida de productos</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Tabla descarte de productos </a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <table id="tablaProdcutos" class="table table-bordered btn-hover">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Codigo</th>
                                  <th>Descripcion</th>
                                  <th>Estado Producto</th>
                                  <th>Talla</th>
                                  <th>Color</th>
                                  <Th>Marca</Th>
                                  <th>Precio</th>
                                  <th>Stock</th>
                                  <th>Categoria</th>
                                  <th>Opciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php if (!empty($productos)) : ?>
                                  <?php foreach ($productos as $productos) : ?>

                                    <tr>
                                      <td><?php echo $productos->id_productos; ?></td>
                                      <td><?php echo $productos->codigo; ?></td>
                                      <td><?php echo $productos->nombre; ?></td>
                                      <td><?php echo $productos->descripcion; ?></td>
                                      <td><?php echo $productos->talla; ?></td>
                                      <td><?php echo $productos->color; ?></td>
                                      <td><?php echo $productos->marca; ?></td>
                                      <td><?php echo $productos->precio; ?></td>
                                      <td><?php echo $productos->stock; ?></td>
                                      <td><?php echo $productos->categoria; ?></td>
                                      <td>
                                        <div class="btn-group">
                                          <button type="button" class="btn btn-info btn-vista" data-toggle="modal" data-target="modal-default" value="<?php echo $productos->id_productos ?>"><span class="fa fa-search"></span></button>
                                          <a href="<?php echo base_url() ?>Mantenimiento/Productos/editar/<?php echo $productos->id_productos; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                          <a href="<?php echo base_url(); ?>Mantenimiento/Productos/borrar/<?php echo $productos->id_productos; ?>" class="btn btn-danger btn-borrar"><span class="fa fa-remove"></span></a>
                                        </div>
                                      </td>
                                    </tr>
                                  <?php endforeach; ?>
                                <?php endif; ?>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th colspan="8" style="text-align:right">Total items de pagina:</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                </tr>
                                <tr>
                                  <th colspan="8" style="text-align:right">Total items general:</th>
                                  <th id="Total_productos"></th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                              booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                              booth letterpress, commodo enim craft beer mlkshk </p>
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
      </div>
    </div>
    <!-- /page content -->