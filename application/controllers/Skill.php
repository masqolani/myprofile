<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        
        $this->load->model('skill_model');        
	}

	public function index()
	{
		$get_skill = $this->skill_model->get_skill();
		
		$data['skill'] = $get_skill;

		// heeader
		$this->load->view('header');
		// body
		$this->load->view('skill_view', $data);
		// footer
		$this->load->view('footer');
	}

}
