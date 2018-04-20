<?php 

class Ejer5 extends CI_Model {
	
	public function getPos(){
		return $this->db->get('ejer5');
	}
	public function insertar($data){

		#$this->db->insert('ejer4',$enviar);
	}
}

?>