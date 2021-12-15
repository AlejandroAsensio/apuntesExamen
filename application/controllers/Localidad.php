<?php
class Localidad extends CI_Controller {
    function r() {
        $this->load->model('Localidad_model');
        $data['localidades'] = $this->Localidad_model->getAll();
        frame($this,'localidad/r',$data);
    }
    
    function c() {
       
        frame($this,'localidad/c');
    }
    
    function cPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'ninguno';
        $provincia = isset($_POST['provincia'])?$_POST['provincia']:'ninguno';
        
        $this->load->model('Localidad_model');
        try {
            $this->Localidad_model->c($nombre, $provincia);
            redirect(base_url().'localidad/r');
        }
        catch (Exception $e) {
           errorMsg($e->getMessage(),'localidad/c');
        }
    }

    

}
?>