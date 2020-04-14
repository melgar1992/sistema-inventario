<?php
class Reportes_model extends CI_Model
{
    public function getInvenario()
    {
        $this->db->select('nombre, descripcion');
        $this->db->select_sum('stock');
        $this->db->group_by('descripcion, nombre');
        $this->db->or_where('descripcion', 'Nuevo');
        $this->db->or_where('descripcion', 'Usado');
        $this->db->or_where('descripcion', 'Desgastado');
        $this->db->or_where('descripcion', 'Falla');
       
        $resultado = $this->db->get('productos');
        return $resultado->result();
    }
}