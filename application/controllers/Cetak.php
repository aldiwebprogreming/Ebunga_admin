<?php 

	class Cetak extends CI_Controller{


		function __construct(){



			parent:: __construct();
			if ($this->session->userdata('username') == NULL) {
			redirect('/');
		}

			$this->load->model('m_data');
		}



		function user(){

			echo "hello";

		}



	}

 ?>