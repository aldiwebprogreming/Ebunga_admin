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


                          <?php foreach ($markup as $data ) {
                            
                          } ?>
                                
                    <div class="card-body">
                     <form method="POST" action="">

                        <div class="col-md-8 col-lg-8">
                          
                            <div class="mb-3">
                              <label for="" class="form-label">Mark Up</label>
                              <input type="text" class="form-control" name="mark_up"  placeholder="Masukan mark up" required="" value="<?= $data['mark_up'] ?>">
                               <small>Masukan mark up tanpa tanda (%)</small>
                            </div>



                             <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                              <select class="form-control" name="active"> 
                             <?php 
                                if ($data['active'] == 1) {
                                     echo "<option value='1'>Y</option>";
                                      echo "<option value='0'>N</option>";                                  
                                } else {

                                     echo "<option value='0'>N</option>";
                                      echo "<option value='1'>Y</option>";

                                }
                              ?>
                              </select>
                            </div>


                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>markup/data_markup" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                     </div>
          
                </div>
              </div>
            </div>
          </section>
        </div>
