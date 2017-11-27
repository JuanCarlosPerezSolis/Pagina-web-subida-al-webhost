<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuarios extends CI_Controller {
   public function __construct() {
      parent::__construct();
      
   }
   public function nuevo_usuario()
    {
       
      $this->load->helper('form');//o se carga en autoload
      $this->load->view("usuarios/form_usuario");
   }
   public function crear_usuario()
    {
      $this->load->helper('form');
      $this->load->library('form_validation');


      $this->form_validation->set_rules('iniciosecion', 'iniciosecion', 'required|min_length[3]'); 
      $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]');      
      $this->form_validation->set_rules('apellidos', 'Apellidos', 'required|min_length[3]');
      $this->form_validation->set_rules('nacionalidad', 'Nacionalidad', 'required|min_length[3]');
      $this->form_validation->set_rules('correo', 'Correo', 'required|min_length[3]');
      $this->form_validation->set_rules('contrasena', 'contrasena', 'required|numeric');
           
      if($this->form_validation->run() === true){
           //Si la validación es correcta, se toman los datos de la variable POST
           //y los enviamos al modelo
           $iniciosecion = $this->input->post('iniciosecion');
           $nombre = $this->input->post('nombre');
           $apellidos = $this->input->post('apellidos');
           $nacinalidad = $this->input->post('nacionalidad');
           $correo = $this->input->post('correo');
           $contrasena = $this->input->post('contrasena');
               
           $this->load->model('Usuario_model');
           $this->Usuario_model->insertar_usuario($iniciosecion,$nombre,$apellidos,$nacinalidad,$correo,$contrasena);
       }
    
    $this->load->view('templates/headersesion'); 
    $this->load->view("usuarios/form_usuario");    
    $this->load->view('templates/footer');

    } 
   public function iniciar_sesion() {

      $data = array();
      
      $this->load->view('templates/headersesion', $data);            
      $this->load->view('usuarios/iniciar_sesion', $data);
       $this->load->view('templates/footer');

   }
   public function iniciar_sesion_post() {
      if ($this->input->post()) {
         $iniciosecion = $this->input->post('iniciosecion');
         $contrasena = $this->input->post('contrasena');
         $this->load->model('usuario_model');
         $usuario = $this->usuario_model->usuario_por_nombre_contrasena($iniciosecion,$contrasena);
         if ($usuario) {
            $usuario_data = array(
               'id' => $usuario->id,       
               'iniciosecion' => $usuario->iniciosecion, 
               'logueado' => TRUE
            );
            $this->session->set_userdata($usuario_data);
            redirect('usuarios/logueado');
         } else {
            redirect('usuarios/iniciar_sesion');
         }
      } else {
         $this->iniciar_sesion();
      }
   }
   public function logueado() {
    $this->load->view('templates/headerusuario');
      if($this->session->userdata('logueado')){
         $data = array();
         $data['iniciosecion'] = $this->session->userdata('iniciosecion');
         $this->load->view('usuarios/logueado', $data);
      }else{
         redirect('usuarios/iniciar_sesion');
      }
   }
   public function eliminar() {
    $this->load->view('templates/headereliminar');
      if($this->session->userdata('logueado')){
         $data = array();
         $data['iniciosecion'] = $this->session->userdata('iniciosecion');
         $this->load->view('usuarios/eliminar', $data);
      
   }
    
 }
   public function cerrar_sesion() {
      $usuario_data = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
      redirect('usuarios/iniciar_sesion');
   }
}
