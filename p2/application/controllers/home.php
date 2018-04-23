<?php 

	class Home extends CI_Controller{

		public function index(){
			$alumnos = $this->alumnos->getAlumnos();
			$docentes = $this->docentes->getDocentes();
			$noDocentes = $this->noDocentes->getNoDocentes();

			$data = array(
					'alumnos' => $alumnos,
					'docentes' => $docentes,
					'noDocentes' => $noDocentes);
			$this->load->view('home', $data);
		}
	
		public function modificar($id){
			echo $id;
		}

	}

?>