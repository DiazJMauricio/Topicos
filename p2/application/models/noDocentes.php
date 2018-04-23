<?php 

class NoDocentes extends CI_Model{
	
	function __construct()
	{
		#$this->parent:: __construct();
	}

	public function getNoDocentes(){
		return $this->db->get('noDocente');
	}
	public function getNoDocente($id){
		return $this->db->query("SELECT * FROM nodocente WHERE id = '$id'");
	}
	public function altaNoDocente(){

	}
	public function modificarNoDocente($id,$data){
		$this->db->where('id', $id);
		$this->db->update('nodocente', $data);
	}
	public function bajaNoDocente($id){
		$this->db->where('id', $id);
		$this->db->delete('nodocente');
	}
}
?>