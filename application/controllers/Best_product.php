<?php 

	
	class Best_product extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_data');
		}

		function data_best_product(){

			// $this->db->select_sum('qt');
			// $query = $this->db->get('tbl_temp_order')->result_array();

			// 	var_dump($query);

			// $data['title'] = "Produk terlaris";
			// $data['sub_title']= "Produk Terlaris";

			// $data['best'] = $this->m_data->get_data('tbl_temp_order');
			// $this->load->view('template2/header', $data);
			// $this->load->view('admin/data_best_prodcut', $data);
			// $this->load->view('template2/footer');

			$this->db->select('SUM(qt)');
			$this->db->select('kd_product');
			$this->db->from('tbl_temp_order');
			$this->db->group_by('kd_product');
			$this->db->order_by('qt');
			$this->db->limit(3);
			$data = $this->db->get()->result_array();
			foreach ($data as $a) {
				echo $a['kd_product'];
				echo $a['qts'];
			}

			// $data['title'] = "Produk terlaris";
			// $data['sub_title']= "Produk Terlaris";

			
			// $this->load->view('template2/header', $data);
			// $this->load->view('admin/data_best_prodcut', $data);
			// $this->load->view('template2/footer');



			// SELECT nama_barang, SUM(qty) qty FROM nota_detil
   // GROUP BY nama_barang ORDER BY qty DESC LIMIT 3;

		}
	}

 ?>