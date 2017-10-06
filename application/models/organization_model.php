<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization_model extends CI_Model {


	public function get_organization()
	{
		$query = "SELECT * FROM organization";
		$query = $this->db->query($query);
		$result = $query->result_array();

		return $result;
	}
}