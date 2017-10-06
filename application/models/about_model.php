<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_model extends CI_Model {

	public function get_about_image()
	{
		$query = "SELECT * FROM about_image";
		$query = $this->db->query($query);
		$result = $query->result_array();

		return $result;
	}

	public function get_about()
	{
		$query = "SELECT * FROM about";
		$query = $this->db->query($query);
		$result = $query->result_array();

		return $result;
	}
}