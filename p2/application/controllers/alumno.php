<?php 

class Alumno extends CI_Controller{
	
	public function index(){
	}

	public function modificar($id){

		$this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
		$this->form_validation->set_rules('carrera', 'Carrera', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
 		$this->form_validation->set_rules('nregistro', 'nregistro', 'required|exact_length[7]|is_natural_no_zero');
 		$this->form_validation->set_rules('agno', 'Año que cursa', 'required|exact_length[1]|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE){
			$query = $this->alumnos->getAlumno($id);
			$alumno = $query->row();
			$this->load->view('ModificarAlumno',$alumno);

		}else { 
			$data = array(	'nombre' => $_POST['nombre'],
							'carrera' => $_POST['carrera'],
							'nregistro' => $_POST['nregistro'],
							'agno' => $_POST['agno'] );
			$this->alumnos->modificarAlumno($id,$data);
			echo "<h3 id='cartelExito'>Modificacion Exitosa</h3>";
		}
	}
	public function eliminar($id){
		$this->alumnos->bajaAlumno($id);
		echo "<h3 id='cartelExito'>Alumno Eliminado</h3>";
		echo "<a href=".base_url().">Volver</a>";
	}
	public function alta(){

		$this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
		$this->form_validation->set_rules('carrera', 'Carrera', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
 		$this->form_validation->set_rules('nregistro', 'N Registro', 'required|exact_length[7]|is_natural_no_zero');
 		$this->form_validation->set_rules('agno', 'Año que cursa', 'required|exact_length[1]|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('altaAlumno');
		}else { 
			$data = array(	'nombre' => $_POST['nombre'],
							'carrera' => $_POST['carrera'],
							'nregistro' => $_POST['nregistro'],
							'agno' => $_POST['agno'] );
			$this->alumnos->altaAlumno($data);
			$this->load->view('altaExitosa');
			echo "<h3 id='cartelExito'>Alta Exitosa</h3>";
		}
		
	}
}
?>