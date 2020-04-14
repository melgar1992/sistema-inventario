<?php

class Descarte extends BaseController
{

    function __construct()
    {

        parent::__construct();
        $this->load->model("Ventas_model");
    }

    public function index()
    {
        $data = array(
            'descarte_productos' => $this->Descarte_producto_model->getDescartesProductos(),
            "productos" => $this->Ventas_model->getProcutosTodos(), 
        );
        $this->loadView('Descarte','/form/admin/descarte/list', $data);
    }
}