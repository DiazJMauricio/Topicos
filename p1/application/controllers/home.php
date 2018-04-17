<?php 

	class Home extends CI_Controller{

		public function index(){
			#$this->load->model('ejer4');

			$result = $this->ejer4->getPos();

			$data = array(
				'title' => 'holas',  
				'consulta' => $result );
			$this->load->view('home', $data);
		}

	}

?>