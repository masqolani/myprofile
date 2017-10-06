<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertificate extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        
        $this->load->model('sertificate_model');        
	}

	public function index()
	{
		$get_sertificate = $this->sertificate_model->get_sertificate();

		$data['sertificate'] = $get_sertificate;

		// heeader
		$this->load->view('header');
		// body
		$this->load->view('sertificate_view', $data);
		// footer
		$this->load->view('footer');
	}
}
