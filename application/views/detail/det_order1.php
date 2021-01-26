<div class="main-content">
        <section class="section">
          <div class="section-header">
              <?php foreach ($det as $data) {
                         
                        } ?>   
          <h4><i class="fas fa-shopping-bag" style="font-size: 30px; color: #8A2BE2;"></i> Detail Order <?= $data['customer'] ?></h4>
          </div>
          
             

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                  <h4><?= $sub_title ?></h4>
                  </div>



                      
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Temp</strong></label>
                             <p><?= $data['kd_temp'] ?></p>
                               
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Customer</strong></label>
                            
                                    <p><?= $data['customer'] ?></p>
        
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu</strong></label>
                                  <p><?= $data['waktu'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Produk</strong></label>
                                <p><?= $data['kd_product'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Qt</strong></label>
                                  <p><?= $data['qt'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Total</strong></label>
                                 <p><?= $data['total'] ?></p>
                            </div>
                            <hr>

                

                            <div class="mb-3">
                                
                                <a href="<?= base_url() ?>temp_order/data_temp_order" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
            </div>
          </div>
        </section>
      </div>