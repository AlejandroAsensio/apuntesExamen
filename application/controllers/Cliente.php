<?php
class Cliente extends CI_Controller {
    function r() {
        $this->load->model('Localidad_model');
        $data['localidades'] = $this->Localidad_model->getAll();
        
        $this->load->model('Cliente_model');
        $data['clientes'] = $this->Cliente_model->getAll();
        
        frame($this,'cliente/r',$data);
    }
    
    function c() {  
        $this->load->model('Localidad_model');
        $data['localidades'] = $this->Localidad_model->getAll();
        
        frame($this,'cliente/c',$data);
    }
    
    function cPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'ninguno';
        $localidad = isset($_POST['localidad'])?$_POST['localidad']:'ninguno';
        
        $this->load->model('Cliente_model');
        try {
            $this->Cliente_model->c($nombre, $localidad);
            redirect(base_url().'cliente/r');
        }
        catch (Exception $e) {
            errorMsg($e->getMessage(),'cliente/c');
        }
    }
    
    
    
}
?>