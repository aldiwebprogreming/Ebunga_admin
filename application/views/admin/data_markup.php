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
                                <?php 

                                  if ($cek >= 1) { ?>
                                    <a href="#" onclick=" swal('Maaf!', 'Mark up tidak dapat ditambah!', 'info')" class ="btn btn-primary mb-4" disabled > Tambah Mark Up</a>
                                  <?php } else { ?>
                                    <a href="<?= base_url() ?>markup/tambah_markup" class ="btn btn-primary mb-4" disabled > Tambah Mark Up</a>
                                  <?php } ?>
                               


                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Mark Up</th>
                                               <!--  <th>type</th> -->
                                               <!--  <th>Kategori Product</th>
                                                <th>Active</th> -->
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Mark Up</th>
                                             <!--    <th>type</th> -->
                                               <!--  <th>Kategori Product</th>
                                                <th>Active</th> -->
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($markup as $data) { ?>

                                             <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['mark_up'] ?></td>
                                                <!-- <td><?= $data['type'] ?></td> -->
                                              <!--   <td><?= $data['kategori_product'] ?></td>
                                                <td><?= $data['active'] ?></td> -->
                                                <td>
                                                   <span class="d-inline-block" data-toggle="tooltip" data-title="Hapus">
                                                    <a href="<?= base_url() ?>markup/hapus?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                  </span>
                                                   <span class="d-inline-block" data-toggle="tooltip" data-title="Edit">
                                                    <a href="<?= base_url() ?>markup/edit?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                                  </span>
                                                </td>
                                              
                                            </tr>

                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
  </div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');

       
    })
    </script>

   