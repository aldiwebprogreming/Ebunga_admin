<?php 

	class M_data extends CI_Model{


		public function get_data($tabel)
		{

			return $query = $this->db->get($tabel)->result_array();


		}

		public function get_det($tabel, $id){


			return  $query = $this->db->get_where($tabel, array('id' => $id ))->result_array();
		}

		public function get_det1($tabel, $id){


			return  $query = $this->db->get_where($tabel, array('type' => $id ))->result_array();
		}

		public function proses_edit($id,$tabel,$data){


				$this->db->where('id', $id);
        		$this->db->update($tabel, $data);
		}


		function get_pelanggan(){

				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('tbl_customer','2');

				return $query->result_array();

		}

		function get_member(){

				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('tbl_member','3');

				return $query->result_array();

		}

		function get_order(){

				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('tbl_temp_order','3');

				return $query->result_array();

		}

		function detail_terlaris($kd_product){

			return $this->db->get_where('tbl_temp_order', array('kd_product' => $kd_product))->result_array();
		}


	}

 ?>