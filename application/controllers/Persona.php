<?php
class Persona extends CI_Controller {
    function r() {
            $this->load->model('Persona_model');
            $data['personas'] = $this->Persona_model->getAll();
        frame($this,'persona/r',$data);
    }
    
    function c() {  
        $this->load->model('Aficion_model');
        $data['aficiones'] = $this->Aficion_model->getAll();
        
        $this->load->model('Pais_model');
        $data['paises'] = $this->Pais_model->getAll();
        
        frame($this,'persona/c',$data);
    }
    
    function cPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'ninguno';
        $idPaisNace = isset($_POST['idPaisNace'])?$_POST['idPaisNace']:'ninguno';
        $idPaisVive = isset($_POST['idPaisVive'])?$_POST['idPaisVive']:'ninguno';
        
        $aficionesGusta = isset($_POST['aficionesGusta'])?$_POST['aficionesGusta']:[];
        $aficionesOdia = isset($_POST['aficionesOdia'])?$_POST['aficionesOdia']:[];
        
        
        $this->load->model('Persona_model');
        try {
            $this->Persona_model->c($nombre,$idPaisNace,$idPaisVive,$aficionesGusta,$aficionesOdia);
            redirect(base_url().'persona/r');
        }
        catch (Exception $e) {
            errorMsg($e->getMessage(),'persona/c');
        }
    }
    
    
    
}
?>