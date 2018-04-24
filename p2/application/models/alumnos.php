<?php 

class Alumnos extends CI_Model{
	
	function __construct()
	{
		#$this->parent:: __construct();
	}

	public function getAlumnos(){
		return $this->db->get('alumnos');
	}
	public function getAlumno($id){
		return $this->db->query("SELECT * FROM alumnos WHERE id = '$id'");
	}
	public function altaAlumno($data){
		$this->db->insert('alumnos', $data);
	}
	public function modificarAlumno($id,$data){
		$this->db->where('id', $id);
		$this->db->update('alumnos', $data); 
	}
	public function bajaAlumno($id){
		$this->db->where('id', $id);
		$this->db->delete('alumnos');
	}
}
?>