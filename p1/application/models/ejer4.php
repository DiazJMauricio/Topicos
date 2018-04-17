<?php 

/**
* 
*/
class Ejer4 extends CI_Model {
	

	public function getPos(){
		return $this->db->get('ejer4');
	}
	public function insertar($data){
		if(isset($data['nombretutor'])){
			$enviar = array(
				'nombre' => $data['nombre'],
				'edad' => $data['edad'],
				'dni' => $data['dni'],
				'nombretutor' => $data['nombretutor'],
				'dnitutor' => $data['dnitutor'],
				 );

			$this->db->insert('ejer4',$enviar);

			#$resultado = $this->db->query("INSERT INTO ejer4(tipo, nombre, dni, edad, nombretutor, dnitutor) VALUES ('juvenil',$nombre,$dni,$edad,$nombretutor,dnitutor");

			/*INSERT INTO `ejer4`(`id`, `tipo`, `nombre`, `dni`, `edad`, `nombretutor`, `dnitutor`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])*/
			/*("INSERT INTO 'ejer4'('tipo', 'nombre', 'dni', 'edad', 'nombretutor', 'dnitutor') VALUES ($data['tipo'],$data['nombre'],$data['dni'],$data['edad'],$data['nombretutor'],$data['dnitutor']");*/
			#INSERT INTO 'ejer4' ('tipo', 'nombre', 'dni', 'edad', 'nombretutor', 'dnitutor') VALUES ('juvenil','$nombre','$dni','$edad','$nombretutor','$dnitutor'
		}
	}
}

?>