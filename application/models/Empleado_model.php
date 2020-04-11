<?php
class Empleado_model extends CI_Model
{

    
    public function getEmpleados()
    {
    
            $this->db->select('e.*, td.nombre as tipo_documento, td.cantidad');
            $this->db->from('empleados e');
            $this->db->join('tipo_documento td', 'td.id_tipo_documento = e.id_tipo_documento');
            $this->db->where('e.estado', '1');
            $resultado = $this->db->get();

            return $resultado->result();
        
    }
    public function validarCi($ci)
    {
        $this->db->select('e.estado, e.num_documento');
        $this->db->from('empleados e');
        $this->db->where('e.num_documento', $ci);
        $this->db->where('e.estado', '1');

        $resultado = $this->db->get();

        $row = $resultado->row();

        if (isset($row)) {
            return false;
        } else {
            return true;
        }
    }
    public function guardarEmpleado($datosEmpleado, $tipo_documento)
    {
        $this->db->where('nombre', $tipo_documento);
        $resultado = $this->db->get('tipo_documento')->row();

        $datosEmpleado['id_tipo_documento'] = $resultado->id_tipo_documento;

        return $this->db->insert('empleados', $datosEmpleado);
    }
    public function getEmpleado($id_empleados)
    {
        $this->db->select('e.*, td.nombre as tipo_documento');
        $this->db->from('empleados e');
        $this->db->join('tipo_documento td', 'td.id_tipo_documento = e.id_tipo_documento');
        $this->db->where('e.estado', '1');
        $this->db->where('e.id_empleados', $id_empleados);
        $resultado = $this->db->get()->row();

        if (isset($resultado)) {
            return $resultado;
        } else {
            return false;
        }
    }
    public function actualizar($id_empleados, $tipo_documento, $datos)
    {
        $this->db->where('nombre', $tipo_documento);
        $tipo_documento = $this->db->get('tipo_documento')->row();
        $datos['id_tipo_documento'] = $tipo_documento->id_tipo_documento;

        $this->db->where('id_empleados', $id_empleados);
        return $this->db->update('empleados', $datos);
    }
    public function borrar($id_usuarios, $datos)
    {
        $this->db->where('id_usuarios', $id_usuarios);
        return $this->db->update('usuarios', $datos);
    }
    
}
