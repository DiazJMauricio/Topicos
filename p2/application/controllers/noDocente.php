<?php 



class NoDocente extends CI_Controller{
	
	public function index(){
	}

	public function modificar($id){
		if (isset($_POST['nombre'])) {
			$data = array(
               'nombre' => $_POST['nombre'],
               'departamento' => $_POST['departamento'],
               'categoria' => $_POST['categoria'],
               'cuil' => $_POST['cuil']
            );
			$this->noDocentes->modificarNoDocente($id,$data);
			echo "<h3 id='cartelExito'>Modificacion Exitosa</h3>";
		}

		$query = $this->noDocentes->getNoDocente($id);
		$NoDocente = $query->row();
		$this->load->view('ModificarNoDocente',$NoDocente);
	}
	public function eliminar($id){
		$this->noDocentes->bajaNoDocente($id);
		echo "<h3 id='cartelExito'>No Docente Eliminado</h3>";
		echo "<a href=".base_url().">Volver</a>";

	}
	public function alta(){
		if (isset($_POST['nombre'])) {
			$data = array(
               'nombre' => $_POST['nombre'],
               'departamento' => $_POST['departamento'],
               'categoria' => $_POST['categoria'],
               'cuil' => $_POST['cuil']
            );
			$this->noDocentes->altaNoDocente($data);
			echo "<h3 id='cartelExito'>Alta Exitosa</h3>";
		}
		$this->load->view('altaNoDocente');
	}
}

?>