<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertificate_model extends CI_Model {


	public function get_sertificate()
	{
		$query = "SELECT * FROM sertificate";
		$query = $this->db->query($query);
		$result = $query->result_array();

		return $result;
	}
}