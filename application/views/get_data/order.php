<?php foreach ($order as $data) { ?>
  	<a href="<?= base_url() ?>temp_order/det_order?id=<?= $data['id'] ?>" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= base_url('') ?>logo/shop.png" class="rounded-circle">
                    <div class=""></div>
                  </div>
                  <div class="dropdown-item-desc">
                   
                      <b><?= $data['customer'] ?></b>
                      <p>Rp.<?=$data['total'] ?></p>

                      <div class="time">
                      	
                      	 <?php 

                      $tgl = substr($data['waktu'], 0,10);
                      $now = date('Y-m-d');

                      if (date('Y-m-d') == $tgl) {
                          echo "<span style='color:green;'>Now</span>";
                      } else {

                        $tgl1 = new DateTime($tgl);
                        $tgl2 = new DateTime($now);
                        $d = $tgl2->diff($tgl1)->days + 1;
                      

                        echo "<span style='color: red;'>$d days ago</span>";
                      }



                     ?>


                      </div>
                    
                  </div>
                </a>

<?php } ?>