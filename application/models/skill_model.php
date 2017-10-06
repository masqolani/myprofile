<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill_model extends CI_Model {

	public function get_skill()
	{
		$query = "SELECT * FROM skill";
		$query = $this->db->query($query);
		$result = $query->result_array();

		return $result;
	}

}