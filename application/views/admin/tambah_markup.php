
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
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">

                            <div class="mb-3">
                              <label for="" class="form-label">Mark Up</label>
                              <input type="number" class="form-control" name="mark_up"  placeholder="Masukan mark up" required="" maxlength="3">
                              <small>Masukan mark up tanpa tanda (%)</small>
                            </div>

                           <!--  <div class="mb-3">
                              <label for="" class="form-label">Type</label>
                              <select class="form-control" name="type" id="type">
                                <option>--Pilih type mark up--</option>
                                <option>all</option>
                                <option  id="kategroi">kategori</option>
                              </select>
                            </div>

                            <div class="mb-3" id="tampil" style="display: none">
                              <label for="" class="form-label">Kategori Produk</label>
                              <select class="form-control" name="type" id="type">
                                <option>--Pilih kategori--</option>
                                <?php foreach ($kategori as $data) { ?>
                                  <option><?= $data['kd_kategori'] ?></option>
                                <?php } ?>
                              </select>
                            </div> -->

                            


                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
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

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<!-- <script type="text/javascript">
  
    $(document).ready(function(){

          $('#type').change(function(){

           var a = $(this).val();
           if (a == 'kategori') {
              $("#tampil").show();
           }else{
              $("#tampil").hide()
           }
          });

        });

</script> -->