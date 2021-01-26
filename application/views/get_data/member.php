<?php foreach ($member as $data) { ?>
  <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= base_url('') ?>logo/usericon.png" class="rounded-circle">
                    <div class=""></div>
                  </div>
                  <div class="dropdown-item-desc">
                   
                      <b><?= $data['username'] ?></b>
                      <p><?=$data['phone'] ?></p>
                     <!--  <div class="time">10 Hours Ago</div> -->
                    
                  </div>
                </a>

<?php } ?>