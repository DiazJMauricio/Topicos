<?php 



class Validar extends CI_Controller {
	public function index(){

		if (isset($_POST)){
			$data = array('tipo' => $_POST['tipo']);

			$this->load->view('validar',$data);
		}
	}

	public function registrar(){
		echo '<a href='. base_url().'>Volver</a>';
		$this->ejer4->insertar($_POST);
	}
}

?>