<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        
        $this->load->model('experience_model');     
	}

	public function index()
	{
		// count guest web
		// $get_ip = $_SERVER['REMOTE_ADDR'];
		// $tanggal = date("d-m-Y");

		// $queryPengunjung = mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE waktu='$waktu'");
		// $dataPengunjung = mysqli_fetch_array($queryPengunjung);

		// if ($dataPengunjung == 0) {
		//     mysqli_query($koneksi, "INSERT INTO pengunjung VALUES('', '$waktu', '1')") or die(mysqli_error());
		// }else{
		//     $tambah = $dataPengunjung['jumlah']+1;
		//     mysqli_query($koneksi, "UPDATE pengunjung SET jumlah='$tambah' WHERE waktu='$waktu'") or die(mysqli_error());
		// }

		// log_message('debug','get_ip => '.print_r($get_ip,true));
		// die;

		$id = '';
		$section_type = '1,2';

		$get_experience = $this->experience_model->get_experience($id,$section_type);
		
		$data['experience'] = $get_experience;

		// heeader
		$this->load->view('header');
		// body
		$this->load->view('experience_view', $data);
		// footer
		$this->load->view('footer');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$section_type = '';
		
		$get_experience = $this->experience_model->get_experience($id,$section_type);
		$get_experience_image = $this->experience_model->get_experience_image($id);

		$data['experience'] = $get_experience;
		$data['experience_image'] = $get_experience_image;

		// heeader
		$this->load->view('header');
		// body
		$this->load->view('experience_detail_view', $data);
		// footer
		$this->load->view('footer');
	}
}
