<?php
class Alumnos_Model extends CI_Model
{
	public function getAll(){
		$result = $this->db->get('alumnos');
		$alumnos = $result->result_array();
		return $alumnos;

	}

}

?>