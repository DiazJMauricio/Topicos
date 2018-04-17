<?php 

/**
* 
*/
class Ejer4 extends CI_Model {
	

	public function getPos(){
		return $this->db->get('ejer4');
	}
	public function insertar($data){
		if(isset($data['nombretutor'])){
			#$resultado = $this->db->query("INSERT INTO 'ejer4'('tipo', 'nombre', 'dni', 'edad', 'nombretutor', 'dnitutor') VALUES ($data['tipo'],$data['nombre'],$data['dni'],$data['edad'],$data['nombretutor'],$data['dnitutor']");
		}
	}
}

?>