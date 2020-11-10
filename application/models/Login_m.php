<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 26/09/2019
 * Time: 09:25 AM
 */

defined("BASEPATH");

class Login_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getLogin($user, $pass){
        $newpass= sha1($pass);
        $this->db->select("count(u.id) as login, u.username, u.id, r.nombre");
        $this->db->from("usuario u");
        $this->db->join("rol r","u.rol_id=r.id_rol");
        $this->db->where("u.username",$user);
        $this->db->where("u.password",$newpass);
        $this->db->group_by(array("u.id"));
        $query = $this->db->get();
        return $query->row();
    }

    public function array_session($query){
        $datasession=array('id'=>$query->id,
            'username'=>$query->username,
            'rol'=>$query->nombre,
            'logged_in'=>TRUE);
        return $datasession;
    }

    public function login($user, $pass){
        $datos=new stdClass();
        $datos->estado=false;
        $query=$this->getLogin($user,$pass);
        if ($query!=null){
            if ($query->login==1){
                $datos->estado=true;
                $datos->mensaje='Session correcta';
            }
        }else{
            $datos->estado=false;
            $datos->mensaje="Usuario y/o contraseña incorrectos";
        }
        if ($datos->estado==true){
            $arraysession=$this->array_session($query);
            $this->session->set_userdata($arraysession);
        }
        return $datos;
    }
}