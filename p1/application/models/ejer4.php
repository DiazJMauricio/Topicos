<?php 

/**
* 
*/
class Ejer4 extends CI_Model {
	

	public function getPos(){
		return $this->db->get('ejer4');
	}
	public function insertar($data){
		$enviar = array(
			'nombre' => $data['nombre'],
			'edad' => $data['edad'],
			'dni' => $data['dni']);
		if (isset($data['nombretutor'])){
			$enviar['nombretutor'] = $data['nombretutor'];
			$enviar['dnitutor'] = $data['dnitutor'];
		}

		$this->db->insert('ejer4',$enviar);
	}
}

?>