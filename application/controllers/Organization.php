<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        
        $this->load->model('organization_model');        
	}

	public function index()
	{
		$get_organization = $this->organization_model->get_organization();

		$data['organization'] = $get_organization;

		// heeader
		$this->load->view('header');
		// body
		$this->load->view('organization_view', $data);
		// footer
		$this->load->view('footer');
	}
}
