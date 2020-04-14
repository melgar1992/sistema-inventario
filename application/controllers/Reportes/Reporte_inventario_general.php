<?php

class Reporte_inventario_general extends BaseController
{

    function __construct()
    {

        parent::__construct();
       
    }

    public function index()
    {
    

            $datos = array(
                'productos' => $this->Reportes_model->getInvenario(),
         );

        $this->loadView("ReportesInventario","/form/admin/reportes/Reporte_inventario_general",$datos);
        
    }




}