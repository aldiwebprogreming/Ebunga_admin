<?php 

	
	class Best_product extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_data');
		}

		function data_best_product(){

		 $this->db->select('id, kd_product, SUM(qt) as qt, SUM(total) as total, COUNT(kd_product) as jml');
		 $this->db->group_by('kd_product'); 
		 $this->db->order_by('jml', 'desc'); 
		 $data['best'] = $this->db->get('tbl_temp_order')->result_array();
		

			$data['title'] = "Produk terlaris";
			$data['sub_title']= "Produk Terlaris";
			$this->load->view('template2/header', $data);
			$this->load->view('admin/data_best_prodcut',$data);
			$this->load->view('template2/footer');
		}


		function detail(){

			$data['title'] = "Detail produk terlaris ";
			$data['sub_title'] = "Detail produk terlaris";
			$kd_product = $this->input->get('id');
			$data['produk_terlaris'] = $this->m_data->detail_terlaris($kd_product);

			$this->load->view('template2/header', $data);
			$this->load->view('detail/detail_produk_terlaris',$data);
			$this->load->view('template2/footer');
		}

			
		function cetak_data(){

		$this->load->library('dompdf_gen');

		$data['judul'] = "PRODUK TERLARIS EBUNGA";
		$data['footer'] = "Laporan data produk terlaris ebunga dicetak pada tanggal :";
		
		 $this->db->select('id, kd_product, SUM(qt) as qt, SUM(total) as total, COUNT(kd_product) as jml');
		 $this->db->group_by('kd_product'); 
		 $this->db->order_by('jml', 'desc'); 
		 $data['best'] = $this->db->get('tbl_temp_order')->result_array();

 		$this->load->view('cetak/cetak_best_produk',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_best_produk", array('Attachment' => 0));
	}

		function cetak_excel(){

		$this->db->select('id, kd_product, SUM(qt) as qt, SUM(total) as total, COUNT(kd_product) as jml');
		 $this->db->group_by('kd_product'); 
		 $this->db->order_by('jml', 'desc'); 
		 $data['best'] = $this->db->get('tbl_temp_order')->result_array();

 		$this->load->view('excel/cetak_best_produk', $data);
	}


	function det_cetak_data(){

		$this->load->library('dompdf_gen');
		$kd_product = $this->input->get('id');
		$data['produk_terlaris'] = $this->db->get_where('tbl_temp_order',array('kd_product' => $kd_product ))->result_array();

		$data['judul'] = "DETAIL PRODUK TERLARIS EBUNGA";
		$data['footer'] = "Laporan data detail produk terlaris ebunga dicetak pada tanggal :";

 		$this->load->view('cetak/det_cetak_best_produk',$data);
 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_detail_best_product", array('Attachment' => 0));

	}

		function det_cetak_excel(){

			$kd_product = $this->input->get('id');
			$data['produk_terlaris'] = $this->db->get_where('tbl_temp_order',array('kd_product' => $kd_product ))->result_array();

			$this->load->view('excel/det_cetak_best_produk', $data);
			


		}



		
	}

 ?>