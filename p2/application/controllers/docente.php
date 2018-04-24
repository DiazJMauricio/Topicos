<?php 
/**
* 
*/
class Docente extends CI_Controller{
	
	public function index(){
	}

	public function modificar($id){

		$this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
		$this->form_validation->set_rules('cargo', 'cargo', 'required|in_list[Profesor,JTP,Auxiliar de Primera, Auxiliar de Segunda]');
 		$this->form_validation->set_rules('cuil', 'CUIL/CUIT', 'required|exact_length[12]|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE){
			$query = $this->docentes->getDocente($id);
			$docente = $query->row();
			$this->load->view('ModificarDocente',$docente);

		}else { 
			$data = array(
               'nombre' => $_POST['nombre'],
               'cargo' => $_POST['cargo'],
               'cuil' => $_POST['cuil']
            );
			$this->docentes->modificarDocente($id,$data);
			echo "<h3 id='cartelExito'>Modificacion Exitosa</h3>";
		}

	}
	public function eliminar($id){
		$this->docentes->bajaDocente($id);
		echo "<h3 id='cartelExito'>Docente Eliminado</h3>";
		echo "<a href=".base_url().">Volver</a>";
	}
	public function alta(){

		$this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
		$this->form_validation->set_rules('cargo', 'cargo', 'required|in_list[Profesor,JTP,Auxiliar de Primera, Auxiliar de Segunda]');
 		$this->form_validation->set_rules('cuil', 'CUIL/CUIT', 'required|exact_length[12]|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('altaDocente');
		}else { 
			$data = array(
               'nombre' => $_POST['nombre'],
               'cargo' => $_POST['cargo'],
               'cuil' => $_POST['cuil']
            );
			$this->docentes->altaDocente($data);
			$this->load->view('altaExitosa');
		}
	}
}
?>