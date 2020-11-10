<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 06/11/2019
 * Time: 01:40 PM
 */
include (APPPATH.'controllers/Pro.php');

class Usuario extends Pro
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuario_m");
    }

    public function index(){
        $data["title"]="Gestión Usuarios";
        $this->load->view("layout/head",$data);
        $this->load->view("layout/nav");
        $this->load->view("layout/sideBar");
        $datos["usuario"] = $this->Usuario_m->getUsuarios();
        $this->load->view("usuario/usuario_view",$datos);
        $this->load->view("layout/footer");
        $this->load->view("usuario/usuario_final_templete");
    }

    public function insertar(){
        $newpass = sha1($this->input->post("password"));
        $newsalt = sha1($this->input->post("salt"));
        $data = array(
            'id'=>0,
            'username'=>$this->input->post("username"),
            'password'=>$newpass,
            'salt'=>$newsalt,
            'nombres'=>$this->input->post("nombre"),
            'apellidos'=>$this->input->post("apellido"),
            'direccion'=>$this->input->post("direccion"),
            'email'=>$this->input->post("email"),
            'estado'=>1,
            'rol_id'=>1
        );

        $res = $this->Usuario_m->agregar($data);
        header("Location: ".site_url("usuario"));
    }

    public function getUsuario(){
        $id = $this->input->post("id");
        $res = $this->Usuario_m->getUsuarios($id);
        echo json_encode($res);
    }


}