<?php
class Pages extends CI_Controller {

        public function view($page = 'home')
        {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

       $data=array('title'=>'CONOCE NUESTRA LIGA DE FUTBOL','titulo1'=>'Registra a tu equipo','titulo'=>'----FUTBOL MX----');             

        $this->load->view('templates/header1', $data);
        $this->load->view('templates/titulotexto', $data);
        $this->load->view('templates/imagen', $data);
        $this->load->view('templates/imagenequipos', $data);
        $this->load->view('templates/imagenpremiasion', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/contenido', $data);
        $this->load->view('templates/footer', $data);
}
}