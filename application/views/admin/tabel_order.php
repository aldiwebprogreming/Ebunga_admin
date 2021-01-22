    <table class="table table-bordered" id="" width="100%" cellspacing="0">
        <thead>
            <tr>
               
                <th>Customer</th>
                <th>Qt</th>
                <th>Total</th>
                <th>Order Time</th>
              
              
            </tr>
        </thead>
        
        <tbody style="font-size: 11px;">

            <?php 

            date_default_timezone_set('Asia/Jakarta');
            $now = date('Y-m-d');
            foreach ($order as $data) { ?>
            <tr>
             
                <td><?= $data['customer'] ?></td>
                <td><?= $data['qt'] ?></td>
                <td><?= $data['total'] ?></td> 
                 <td>
                    
                    <?php 

                      $tgl = substr($data['waktu'], 0,10);
                      $now = date('Y-m-d');

                      if (date('Y-m-d') == $tgl) {
                          echo "<span class='badge badge-success'>Now</span>";
                      } else {

                        $tgl1 = new DateTime($tgl);
                        $tgl2 = new DateTime($now);
                        $d = $tgl2->diff($tgl1)->days + 1;
                      

                        echo "<span class='badge badge-warning'>$d days ago</span>";
                      }

                     ?>

                 </td>
               
            </tr>

        <?php } ?>
            
           
        </tbody>
    </table>