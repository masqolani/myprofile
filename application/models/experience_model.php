<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience_model extends CI_Model {

	function __construct()
	{
		parent::__construct();   
	}

	public function get_experience_image($id)
	{
		$query = "SELECT * FROM experience_image WHERE experience_id = ? ";
		$query = $this->db->query($query, $id);
		$result = $query->result_array();

		return $result;
	}

	public function get_experience($id, $section_type)
	{
		log_message('debug', 'id => '.print_r($id,true));

		$query = "SELECT * FROM experience";

		if(!empty($id))
		{
			$query .= " WHERE experience_id = '$id'";
		}
		if(!empty($section_type))
		{
			$query .= " WHERE section_type IN($section_type)";
		}

		$query = $this->db->query($query);
		$result = $query->result_array();

		return $result;
	}
}