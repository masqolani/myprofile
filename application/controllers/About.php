<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        
        $this->load->model('about_model');        
	}

	public function index()
	{
		$get_about = $this->about_model->get_about();
		$get_about_image = $this->about_model->get_about_image();

		$data['about'] = $get_about;
		$data['about_image'] = $get_about_image;

		// heeader
		$this->load->view('header');
		// body
		$this->load->view('about_view', $data);
		// footer
		$this->load->view('footer');
	}
}
