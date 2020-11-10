<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 06/11/2019
 * Time: 02:16 PM
 */

class Usuario_m extends CI_Model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function getUsuarios($id = null){
        $this->db->select("*");
        $this->db->from("usuario");
        if($id!=null){
            $this->db->where("id",$id);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function agregar($data){
        $this->db->insert("usuario",$data);
        return $this->db->insert_id();
    }

    public function modificar($where, $data){
        $this->db->update("usuario",$where,$data);

    }
}