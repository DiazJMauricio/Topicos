<?php 



class Validar extends CI_Controller {
	public function index(){

		if (isset($_POST)){
			$data = array(
				'tipo' => $_POST['tipo'],
				'nombre' => $_POST['nombre'],
				'edad' => $_POST['edad'],
				'dni' => $_POST['dni']
			 );
			
		}

		$this->load->view('validar',$data);
	}
	public function registrar(){
		echo "Registrado";
		$this->ejer4->insertar($_POST);
	}
}

?>