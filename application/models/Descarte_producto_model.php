<?php
class Descarte_producto_model extends CI_Model
{
    public function getDescartesProductos()
    {
        $this->db->select('d.*, p.nombre as nombre_producto, p.descripcion, p.precio, p.codigo, c.nombre as categorias_producto');
        $this->db->from('descarte_producto d');
        $this->db->join('productos p','p.id_productos = d.id_productos');
        $this->db->join('categorias c','c.id_categorias = p.id_categorias');
        $this->db->where('p.estado','1');
        return $this->db->get()->result();
    }

}