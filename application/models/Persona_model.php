<?php
class Persona_model extends CI_Model {
    
    function c($nombre,$idPaisNace,$idPaisVive,$aficionesGusta,$aficionesOdia) {
        $persona= R::findOne('persona','nombre=?',[$nombre]);
        
        if ($persona==null) {
            $persona=R::dispense('persona');
            $persona->nombre = $nombre;
            $persona->nace = R::load('pais',$idPaisNace);
            $persona->vive = R::load('pais',$idPaisVive);
            
            foreach($aficionesGusta as $aficionGusta){
                $aG = R::load('aficion',$aficionGusta);
                $gusto = R::dispense('gusto');
                $gusto->persona = $persona;
                $gusto->aficion = $aG;
                R::store($gusto);
            }
            foreach($aficionesOdia as $aficionOdia){
                $aO = R::load('aficion',$aficionOdia);
                $odio = R::dispense('odio');
                $odio->persona = $persona;
                $odio->aficion = $aO;
                R::store($odio);
            }
            
            R::store($persona);
        }
        else {
            throw new Exception("La persona {$persona->nombre} ya existe");
        }
    }
    
    function getAll() {
        return R::findAll('persona');
    }
    
    
}
?>