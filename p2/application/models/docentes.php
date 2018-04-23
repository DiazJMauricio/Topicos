<?php 

class Docentes extends CI_Model{
	
	function __construct()
	{
		#$this->parent:: __construct();
	}

	public function getDocentes(){
		return $this->db->get('docente');
	}
	public function getDocente($id){
		return $this->db->query("SELECT * FROM docente WHERE id = '$id'");
	}
	public function altaDocente(){

	}
	public function modificarDocente($id, $data){
		$this->db->where('id', $id);
		$this->db->update('docente', $data); 
	}
	public function bajaDocente(){
		
	}
}
?>