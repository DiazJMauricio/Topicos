<?php 



class Validar extends CI_Controller {
	public function index(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
		$this->form_validation->set_rules('edad', 'Edad', 'required|exact_length[2]|is_natural_no_zero|less_than[100]|greater_than[17]');
 		$this->form_validation->set_rules('dni', 'DNI', 'required|exact_length[9]|is_natural_no_zero');

		if ($this->form_validation->run() == FALSE){

			$this->load->view('RegistroMayores');

		}else { 
			$this->load->view('exito');
			$this->ejer4->insertar($_POST);
		}
	}

	public function registrarMenor(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
		$this->form_validation->set_rules('edad', 'Edad', 'required|min_length[1]|max_length[2]|is_natural_no_zero|less_than[18]');
		$this->form_validation->set_rules('dni', 'DNI', 'required|exact_length[9]|is_natural_no_zero');
		$this->form_validation->set_rules('nombretutor', 'Nombre del Tutor', 'required|min_length[3]|max_length[30]|alpha_numeric_spaces');
		$this->form_validation->set_rules('dnitutor', 'DNI del Tutor', 'required|exact_length[9]|is_natural_no_zero');
		
		if ($this->form_validation->run() == FALSE){
			
			$this->load->view('RegistroMenores');
			
		}else { 
			$this->load->view('exito');
			$this->ejer4->insertar($_POST);
		}
		
	}
}

?>