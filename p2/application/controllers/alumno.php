<?php 

class Alumno extends CI_Controller{
	
	public function index(){
	}

	public function modificar($id){
		if (isset($_POST['nombre'])) {
			$data = array(
               'nombre' => $_POST['nombre'],
               'carrera' => $_POST['carrera'],
               'nregistro' => $_POST['nregistro'],
               'agno' => $_POST['agno']
            );
			$this->alumnos->modificarAlumno($id,$data);
			echo "<h3 id='cartelExito'>Modificacion Exitosa</h3>";
		}

		$query = $this->alumnos->getAlumno($id);
		$alumno = $query->row();
		$this->load->view('ModificarAlumno',$alumno);
	}
}
?>