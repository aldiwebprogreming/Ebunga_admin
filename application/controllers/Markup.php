<?php 
		
		class Markup extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				if ($this->session->userdata('username') == NULL) {
				redirect('/');
		}
				$this->load->library('form_validation');
				$this->load->model('m_data');
			}


			function data_markup(){

				$data['title'] = "Data markup";
				$data['sub_title'] = "Data Mark Up Ebunga";

				$data['markup'] = $this->m_data->get_data('tbl_setting_markup');
				$data['cek'] = $this->db->get('tbl_setting_markup')->num_rows();
				$this->load->view('template2/header', $data);
				$this->load->view('admin/data_markup', $data);
				$this->load->view('template2/footer');


			}

			function tambah_markup(){

				// $cek = $this->db->get('tbl_setting_markup')->num_rows();
				// if ($cek >= 1) {
				// 	$this->session->set_flashdata('message','swal("Maaf!", "Anda tidak dapat menambahkan mark up", "info");');
				// 	redirect('markup/data_markup');
				// }


					$data['title'] = "Tambah markup";
					$data['sub_title'] = "Tambah Mark Up Ebunga";

					$data['kategori'] = $this->m_data->get_data('tbl_kategori_produk');
					$this->load->view('template2/header', $data);
					$this->load->view('admin/tambah_markup', $data);
					$this->load->view('template2/footer');
					
					if ($this->input->post('kirim')) {

						if ($this->input->post('type') == 'all') {
							$data = [

						'mark_up' => $this->input->post('mark_up'),
						'type' => $this->input->post('type'),
						'kategori_product' =>'-',
						'active' => 1
					];

					$this->db->insert('tbl_setting_markup', $data);

					 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
					redirect('markup/data_markup');

						} else{

						 $data = [

						'mark_up' => $this->input->post('mark_up'),
						'type' => $this->input->post('type'),
						'kategori_product' => $this->input->post('kategori'),
						'active' => 1
					];

					$this->db->insert('tbl_setting_markup', $data);

					 $this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
					redirect('markup/data_markup');

						}
						
				
				
					}

			}

			function hapus(){

				$id = $this->input->get('id');

				$delete = $this->db->delete('tbl_setting_markup', array('id' => $id));
				$this->session->set_flashdata('message','swal("Suskses!", "Data berhasil dihapus")');
				redirect('markup/data_markup');
			}

			function edit(){
				$id = $this->input->get('id');
				$data['title'] = "Edit markup";
				$data['sub_title'] = "Edit Mark Up Ebunga";

				$data['markup'] = $this->m_data->get_det('tbl_setting_markup', $id);
				$data['kategori'] = $this->m_data->get_data('tbl_kategori_produk');

				$this->load->view('template2/header', $data);
				$this->load->view('admin/edit_markup', $data);
				$this->load->view('template2/footer');

				if ($this->input->post('edit')) {
					
					$data = [

						'mark_up' => $this->input->post('mark_up'),
						'type' => $this->input->post('type'),
						'kategori_product' => $this->input->post('kategori'),
						'active' => $this->input->post('active')
					];


					$update = $this->m_data->proses_edit($id,'tbl_setting_markup',$data);
					$this->session->set_flashdata('message','swal("Suskses!", "Data berhasil diedit")');
					redirect('markup/data_markup');
				}

			}




		}
 ?>