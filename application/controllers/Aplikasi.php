<?php 

	/**
	 * 
	 */
	class Aplikasi extends CI_Controller
	{
		
		function __construct()
		{

			parent:: __construct();
			if ($this->session->userdata('username') == NULL) {
			redirect('/');
		}
			
		}


		function data_aplikasi(){
			$data['title'] = "Not found";
			$data['sub_title'] = "";
			$this->load->view('template2/header', $data);
			$this->load->view('admin/aplikasi', $data);
			$this->load->view('template2/footer');

		}
	}

 ?>