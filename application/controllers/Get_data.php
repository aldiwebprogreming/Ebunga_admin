<?php 

	/**
	 * 
	 */
	class Get_data extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			if ($this->session->userdata('username') == NULL) {
			redirect('/');
		}
			$this->load->model('m_data');
		}

		function index(){

		$data['order'] = $this->m_data->get_data($tabel='tbl_customer_order');
		$this->load->view('get_data/ambil_dataorder', $data);
	
		}  

		function ambil_datauser(){

		$tabel = 'tbl_user';
		$id = "buyyer";
		$data['user'] = $this->db->get_where($tabel, array('type' => $id))->result_array();
		$this->load->view('get_data/ambil_datauser', $data);
		}


		function data_member(){

		
			$data['member'] = $this->m_data->get_member();
			$this->load->view('get_data/member',$data);

		}

		function order(){

				$tgl = date('Y-m-d');
				$this->db->select('*');
				$this->db->from('tbl_temp_order');
				$this->db->like('waktu',$tgl);
				$data['order'] = $this->db->get()->result_array();

				$this->load->view('get_data/order',$data);
		}

		function jumlah_order(){

				$data['jumlah'] = $this->m_data->get_data('tbl_temp_order');

				// $tgl1 = substr($tgl['waktu'], 0,10);

				$tgl = date('Y-m-d');
				$this->db->select('*');
				$this->db->from('tbl_temp_order');
				$this->db->like('waktu',$tgl);
				$data['jumlah'] = $this->db->get()->num_rows();
				
				echo $data['jumlah'];
					
					

			

			
			// $data['jmlh_order'] = $this->db->get('tbl_temp_order')->num_rows();
			// $this->load->view('template2/header',$data);
		

	}
}
 ?>