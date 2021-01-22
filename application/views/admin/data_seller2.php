<!-- loading -->
 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>
  <!-- loading -->


 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $sub_title; ?></h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?= $sub_title ?></h4>

                  </div>       


                                
                                <div class="card-body">
                                  <!--   <?php echo $this->session->flashdata('pesan2'); ?>
                                     <?php echo $this->session->flashdata('pesan'); ?> -->
                               <!--   <a href="<?= base_url() ?>seller/tambah_seller" class ="btn btn-primary mb-4"> Tambah Seller</a>  -->

                                    <a href="<?= base_url() ?>seller/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-file-excel"></i> Cetak PDF</a> 


                                      <a href="<?= base_url() ?>seller/cetak_excel" id="" class ="btn btn-success mb-4" ><i class="fas fa-print"></i> Cetak Excel</a> 


                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>Provinsi</th>
                                                <th>Kabupten</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Alamat</th>
                                                <th>Postal Code</th>
                                                <th>Ktp</th>
                                                <th>Npwp</th>
                                                <th>Siup</th>
                                                 <th>Status</th>
                                                <th>Suspend</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($seller as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['username'] ?></td>
                                                <td><?= $data['full_name'] ?></td>
                                                <td><?= $data['email'] ?></td>
                                                <td><?= $data['phone'] ?></td>
                                                <td>
                                                  <?= $data['country'] ?></td>
                                                <td>

                                                  <?php 
                                                        $id_prov = $data['provinsi'];
                                                      $prov = $this->db->get_where('tbl_provinsi', array('id_prov' => $id_prov))->result_array();

                                                      foreach ($prov as $data_prov) {
                                                        # code...
                                                      }

                                                   ?>
                                                  <?= $data_prov['nama'] ?>
                                                    
                                                  </td>
                                                <td>
                                                     <?php 

                                                        $id_kab = $data['kabupaten'];
                                                        $kab = $this->db->get_where('tbl_kabupaten', array('id_kab' => $id_kab))->result_array();

                                                        foreach ($kab as $data_kab) {
                                                      
                                                        }

                                                     ?>
                                                <?= $data_kab['nama'] ?>
                                                  
                                                </td>
                                                <td>

                                                  <?php 

                                                        $id_kec = $data['kecamatan'];
                                                        $kec = $this->db->get_where('tbl_kecamatan', array('id_kec' => $id_kec))->result_array();

                                                        foreach ($kec as $data_kec) {
                                                      
                                                        }

                                                     ?>
                                                  <?= $data_kec['nama'] ?>
                                                    
                                                  </td>

                                                <td>

                                                  <?php 

                                                      $id_kel = $data['kelurahan'];
                                                      $kel = $this->db->get_where('tbl_kelurahan', array('id_kel' => $id_kel))->result_array();

                                                      foreach ($kel as $data_kel) {
                                                    
                                                      }

                                                   ?>
                                                  <?= $data_kel['nama'] ?>
                                                    

                                                  </td>
                                                <td><?= $data['alamat'] ?></td>
                                                <td><?= $data['postal_code'] ?></td>
                                                <td><?= $data['ktp'] ?></td>
                                                <td><?= $data['npwp'] ?></td>
                                                <td><?= $data['siup'] ?></td>
                                                <td><?= $data['status'] ?></td>
                                                 <td><?= $data['suspend'] ?></td>
                                                


                                              
                                            </tr>

                                            <!-- Modal -->


                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                </main>



                  </div>
                </div>

            </div>
           
         
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
         <!--  Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a> -->
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>

                
<script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>