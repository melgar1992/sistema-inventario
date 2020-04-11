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
    
}
