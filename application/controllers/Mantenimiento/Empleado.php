<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Empleado extends BaseController
{

    public function index()
    {

        $data = array(
            'Empleados' => $this->Empleado_model->getEmpleados(),
        );

        $this->loadView('Empleados', '/form/admin/empleado/list', $data);
    }
    public function guardarEmpleado()
    {
        $nombres = $this->input->post('nombre');
        $apellidos = $this->input->post('apellidos');
        $telefono1 = $this->input->post('telefono1');
        $telefono2 = $this->input->post('telefono2');
        $direccion = $this->input->post('direccion');
        $num_documento = $this->input->post('num_documento');
        $tipo_documento = $this->input->post('tipo_documento');

        $this->form_validation->set_rules("nombre", "Nombre", "required");
        $this->form_validation->set_rules("apellidos", "Apellidos", "required");
        $this->form_validation->set_rules(
            'num_documento',
            'num_documento',
            array(
                'required',
                array('validarCi', array($this->Empleado_model, 'validarCi'))
            ),
            array('validarCi' => 'Carnet de identidad ya esta siendo ocupado')
        );
        $this->form_validation->set_rules("telefono1", "telefono1", "required");       
        $this->form_validation->set_rules("direccion", "direccion", "required");      
        $this->form_validation->set_rules('tipo_documento', 'tipo_documento', 'trim|required');


        if ($this->form_validation->run()) {
            $datosEmpleado = array(
                'nombre' => $nombres,
                'apellidos' => $apellidos,
                'telefono_01' => $telefono1,
                'telefono_02' => $telefono2,
                'direccion' => $direccion,   
                'num_documento' => $num_documento,
                'estado' => '1',
            );
            if ($this->Empleado_model->guardarEmpleado($datosEmpleado, $tipo_documento)) {
                redirect(base_url() . 'Mantenimiento/Empleado');
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar los datos del empleado");
            }
        } else {
            $this->index();
        }
    }
}