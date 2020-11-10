<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 06/11/2019
 * Time: 02:29 PM
 */

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("Login_m");
    }

    public function index(){
        $logged=$this->session->has_userdata('logged_in');
        if ($logged){
            header('Location: '.site_url('usuario'));
        }
        else{
            $data["title"]= "Login";
            $this->load->view("login/login_view",$data);
        }

    }

    public function login(){
        $user = $this->input->post('user');
        $pass = $this->input->post('password');
        $resultado= $this->Login_m->Login($user,$pass);
        if ($resultado->estado)
            header('Location: '.site_url('usuario'));
        else
            header('Location: '.site_url('login'));
    }

    public function logOut(){
        $this->session->sess_destroy();
        session_write_close();
        header('Location: '.site_url('login'));
    }
}