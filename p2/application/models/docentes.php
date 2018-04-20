<?php 

class Docentes extends CI_Model{
	
	function __construct()
	{
		#$this->parent:: __construct();
	}

	public function getDocentes(){
		return $this->db->get('docentes');
	}
	public function getDocente(){

	}
	public function altaDocente(){

	}
	public function modificarDocente(){

	}
	public function bajaDocente(){
		
	}
}
?>