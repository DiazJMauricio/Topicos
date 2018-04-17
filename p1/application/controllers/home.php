<?php 

	class Home extends CI_Controller{

		public function index(){

			$result = $this->db->get('ejer4');

			$data = array(
				'title' => 'holas', 
				'content' => 'hola que hace', 
				'consulta' => $result );
			$this->load->view('home', $data);
		}

	}

?>