<?php 



class NoDocente extends CI_Controller{
	
	public function index(){
	}

	public function modificar($id){
/**/
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
		$this->form_validation->set_rules('departamento', 'Departamento', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
 		$this->form_validation->set_rules('categoria', 'categoria', 'required|less_than[5]|is_natural_no_zero');
 		$this->form_validation->set_rules('cuil', 'CUIL/CUIT', 'required|exact_length[12]|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE){
			$query = $this->noDocentes->getNoDocente($id);
			$NoDocente = $query->row();
			$this->load->view('ModificarNoDocente',$NoDocente);

		}else { 
			$data = array(
               'nombre' => $_POST['nombre'],
               'departamento' => $_POST['departamento'],
               'categoria' => $_POST['categoria'],
               'cuil' => $_POST['cuil']
            );
			$this->noDocentes->modificarNoDocente($id,$data);
			echo "<h3 id='cartelExito'>Modificacion Exitosa</h3>";
		}
	}
	public function eliminar($id){
		$this->noDocentes->bajaNoDocente($id);
		echo "<h3 id='cartelExito'>No Docente Eliminado</h3>";
		echo "<a href=".base_url().">Volver</a>";

	}
	public function alta(){

		$this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
		$this->form_validation->set_rules('departamento', 'Departamento', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
 		$this->form_validation->set_rules('categoria', 'categoria', 'required|less_than[5]|is_natural_no_zero');
 		$this->form_validation->set_rules('cuil', 'CUIL/CUIT', 'required|exact_length[12]|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('altaNoDocente');
		}else { 
			$data = array(
               'nombre' => $_POST['nombre'],
               'departamento' => $_POST['departamento'],
               'categoria' => $_POST['categoria'],
               'cuil' => $_POST['cuil']
            );
			$this->noDocentes->altaNoDocente($data);
			$this->load->view('altaExitosa');
		}
	}
}

?>