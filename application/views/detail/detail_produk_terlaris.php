
<!-- loading -->
 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>
  <!-- loading -->

           <?php 
              foreach ($produk_terlaris as $data) {
                
              }
             ?>

  <div class="main-content">
        <section class="section">
          <div class="section-header">
           <i class="fas fa-bags-shopping"></i> <h1><?= $title; ?> "<?= $data['kd_product']; ?>"</h1>
          </div>

          <div class="section-body">

          

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">

                <div class="card">
                  <div class="card-header">
                    <h4><?= $sub_title ?></h4>
                  </div>

                  <div class="card-body">

               <!--    <a href="<?= base_url() ?>temp_order/tambah_temp_order" class ="btn btn-primary mb-4"> Tambah Temp Order</a>  -->

                  <a href="<?= base_url() ?>best_product/det_cetak_data?id=<?= $data['kd_product']; ?>" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-file-excel"></i> Cetak PDF</a> 
                   
                 <a href="<?= base_url() ?>best_product/det_cetak_excel?id=<?= $data['kd_product']; ?>" id="" class ="btn btn-success mb-4" ><i class="fas fa-print"></i> Cetak Excel</a> 
                   


                      <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Kd Temp</th>
                            <th>Customer</th>
                            <th>Waktu</th>
                            <th>Kd Produk</th>
                            <th>Qt</th>
                             <th>Total</th>
                          
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kd Temp</th>
                            <th>Customer</th>
                            <th>Waktu</th>
                            <th>Kd Produk</th>
                            <th>Qt</th>
                            <th>Total</th>
                           
                        </tr>
                      </tfoot>

                      <tbody>

                          <?php 
                          $no = 1;
                          foreach ($produk_terlaris as $data1) { ?>

                          <tr>
                              <td><?= $no++; ?></td>
                              <td><?= $data1['kd_temp'] ?></td>
                              <td><?= $data1['customer'] ?></td>
                              <td><?= $data1['waktu'] ?></td>
                              <td><?= $data1['kd_product'] ?></td>
                              <td><?= $data1['qt'] ?></td>
                              <td><?= $data1['total'] ?></td>

                              
                            </tr>

                             <?php } ?>
                        </tbody>

                    </table>
                  </div>

                  <a href="<?= base_url() ?>best_product/data_best_product" class="btn btn-success mt-2">Kembali </a>


                  </div>

                </div>
              </div>
             
            </div>
          </div>
        </section>

        
<!--  -->
 


      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; <?= date('Y') ?> <div class="bullet"></div> <a href="https://nauval.in/">www.ebunga.com</a>
        </div>
        <div class="footer-right">
        
        </div>
      </footer>
    </div>
  </div>

<script>
  $(document).ready(function(){

      $('#modal').click(function(){

        var id = $(this).attr('data-modal');

        alert(id)
        // $.get("<?= site_url() ?>model/data_promo?id="+id)

      });

  });
</script>

<script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>