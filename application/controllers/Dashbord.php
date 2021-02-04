<?php 
	
	/**
	 * 
	 */
	class Dashbord extends CI_Controller
	{


		function __construct()
	{
		parent:: __construct();


		if ($this->session->userdata('username') == NULL) {
			redirect('/');
		}

		$this->load->model('m_data');
		$this->load->library('form_validation');
	}
	

		public function index()
		{

			

			$data['title'] = "Dashbord";

			$data['jml_order']= $this->db->query('SELECT * FROM tbl_temp_order')->num_rows();
			$data['customer']= $this->db->query('SELECT * FROM tbl_member')->num_rows();
			$this->db->select('id, kd_product, SUM(qt) as qt, SUM(total) as total, COUNT(kd_product) as jml');
			 $this->db->group_by('kd_product'); 
			 $this->db->order_by('jml', 'desc'); 
			 $data['best'] = $this->db->get('tbl_temp_order')->result_array();

			$this->load->view('template2/header', $data);
			$this->load->view('admin/dashbord',$data);
			$this->load->view('template2/footer');

		}

		


		


		

	}


 ?>