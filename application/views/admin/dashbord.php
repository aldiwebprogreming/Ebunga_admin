<!-- loading -->
 <!-- <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div> -->
  <!-- loading -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-cart-plus"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pesanan</h4>
                  </div>
                  <div class="card-body">
                    <?= $jml_order; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Totoal Customer</h4>
                  </div>
                  <div class="card-body">
                    <?= $customer; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-money-check"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pemasukan</h4>
                  </div>
                  <div class="card-body">
                    Rp.
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-money-check-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Profit</h4>
                  </div>
                  <div class="card-body">
                    Rp.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
             <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Order Terbaru</h4>
                  </div>
                       <div class="card-body">
                        <div id="order">
                                   
                        </div>
                        <center>
                          <a href="<?= base_url() ?>temp_order/data_temp_order" class="badge badge-primary">View all <li class="fas fa-chevron-right"></li></a>
                        </center>
                    </div>
                </div>
            </div>


                <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Pelanggan Terbaru</h4>

                  </div>
                       <div class="card-body">


                          <div id="pelanggan">
                               
                            
                          </div>
                          <center>
                            <a href="<?= base_url() ?>member/data_member" class="badge badge-primary">View all <li class="fas fa-chevron-right"></li></a>
                          </center>
                      </div>
                  </div>
              </div>




              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Chart Registrasi User</h4>
                  </div>
                  <div class="ml-4">
                  <select name="tahun" id="tahun">
                    <option>2020</option>
                    <option>2021</option>
                  </select>
                  </div>
                 
                    
                       <!-- <?php foreach ($regis as $data) {
                         $sub = substr($data['waktu_registrasi'], 5,2);
                         if ($sub == '01') {
                           echo "Jan";
                         } elseif ($sub == '02') {
                           echo "Feb";
                         }elseif ($sub == '03') {
                           echo "Mar";
                         }elseif ($sub == '04') {
                           echo "Apr";
                         }elseif ($sub == '05') {
                           echo "Mei";
                         }elseif ($sub == '06') {
                           echo "Jun";
                         }elseif ($sub == '07') {
                           echo "Jul";
                         }elseif ($sub == '08') {
                           echo "Ags";
                         }elseif ($sub == '09') {
                           echo "Sept";
                         }elseif ($sub == '10') {
                           echo "Okt";
                         }elseif ($sub == '11') {
                           echo "Nov";
                         }elseif ($sub == '12') {
                           echo "Des";
                         } else{
                          echo "gagal";
                         }

                       } ?> -->
                      
                       <div class="card-body">
                              

                     <canvas id="myChart1" width="100%" height="40"></canvas>

                         </div>
                    </div>
                </div>


                 <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Produk Terlaris</h4>
                  </div>
                       <div class="card-body">
                              

                         <canvas id="myChart12" width="100%" height="40"></canvas>

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
          2.3.0
        </div>
      </footer>
    </div>
  </div>
  



<div class="chart" id="chart_user">
  <script>

            var ctx = document.getElementById("myChart1");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr","Mei", "Jun", "jul","Ags", "Sep","Okt","Nov", "Des"],
                    datasets: [{
                            label: '# of Votes',
                            data: [<?php echo $jan; ?>,<?= $feb ?>, 3, 5, 2, 3,12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)'
                               
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

</script>

</div>

        // <!-- grafic produk terlaris -->


          <script>
           var ctx = document.getElementById("myChart12");
            var myChart1 = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [<?php foreach( $best as $data) {
                      echo "'".$data['kd_product']."'".",";
                    } ?>],
                    datasets: [{
                            label: '# of Votes',
                            data: [<?php foreach ($best as $data) {
                              echo $data['jml'].",";
                            }  ?>],
                            backgroundColor: [
                                'rgb(50, 205, 50)',
                                'rgb(123, 103, 238)',
                                'rgb(255, 255, 0)',
                                'rgb(112, 128, 145)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

          </script>

          <script>

          // get data ajax

          $(document).ready(function(){
            // setInterval berfugsi untuk mengrefres loadData selama 1 detik(100)
             setInterval(function(){

                loadData();
                loadOrder();


               }, 100 );


          

          })

          // mengambil data dari controller customer 

          function loadData(){

              $.get("<?= base_url() ?>member/get_member", function(data,success){
                  $("#pelanggan").html(data);

              });

          }


          function loadOrder(){

            $.get("<?= base_url() ?>customer_order/get_customer_order", function(data, success){

                $("#order").html(data);

            });

          }


      // $(document).ready(function(){
      //     $(".preloader").fadeOut('slow');
      //   })


        </script>


        <script type="text/javascript" src="<?= base_url() ?>assets3/js/chart.js"></script>
  