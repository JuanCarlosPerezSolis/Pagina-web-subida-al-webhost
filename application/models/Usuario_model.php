<?php
class Usuario_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function insertar_usuario($iniciosecion,$nombre,$apellidos,$nacionalidad,$correo, $contrasena){
    $data = array(

        'iniciosecion' => $iniciosecion,
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'nacionalidad' => $nacionalidad,
        'correo' => $correo,
        'contrasena' => $contrasena
    );
    return $this->db->insert('usuarios', $data);
   }
   public function usuario_por_nombre_contrasena($iniciosecion, $contrasena){
      $this->db->select('id, iniciosecion');
      $this->db->from('usuarios');
      $this->db->where('iniciosecion', $iniciosecion);
      $this->db->where('contrasena', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
}