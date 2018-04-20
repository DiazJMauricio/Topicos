<?php 

	class Home extends CI_Controller{

		public function index(){			
			$this->load->view('home');
		}
		public function seleccion($accion){
			$data = array('accion' => $accion);
			$this->load->view('seleccion',$data);
		}

	}

?>