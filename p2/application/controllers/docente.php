<?php 
/**
* 
*/
class Docente extends CI_Controller{
	
	public function index(){
	}

	public function modificar($id){
		if (isset($_POST['nombre'])) {
			$data = array(
               'nombre' => $_POST['nombre'],
               'cargo' => $_POST['cargo'],
               'cuil' => $_POST['cuil']
            );
			$this->docentes->modificarDocente($id,$data);
			echo "<h3 id='cartelExito'>Modificacion Exitosa</h3>";
		}

		$query = $this->docentes->getDocente($id);
		$docente = $query->row();
		$this->load->view('ModificarDocente',$docente);
	}
}
?>