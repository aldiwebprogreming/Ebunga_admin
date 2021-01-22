<?php 


/**
 * 
 */
class Ecash extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('username') == NULL) {
			redirect('/');
		}
	}



	function data_ecash(){


		$data['title'] = "Ecash";
		$data['sub_title'] = "Data Ecash";

		$data['ecash'] = $this->m_data->get_data('tbl_e_cash');

		$this->load->view('template2/header', $data);
		$this->load->view('admin/data_ecash', $data);
		$this->load->view('template2/footer');


	}

	function cetak_data(){


		$this->load->library('dompdf_gen');

		$data['judul'] = "E-CASH EBUNGA";
		$data['footer'] = "Laporan data e-cash ebunga dicetak pada tanggal :";
		$data['ecash'] = $this->m_data->get_data("tbl_e_cash");
 		$this->load->view('cetak/cetak_ecash',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_ecash", array('Attachment' => 0));
	}


	function cetak_excel(){

		$data['ecash'] = $this->m_data->get_data('tbl_e_cash');

 		$this->load->view('excel/cetak_ecash', $data);
	}
}


 ?>