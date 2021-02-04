<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?></title>

  <link rel="shortcut icon" href="<?= base_url() ?>logo/logo1.png" style="height: 30px;">

 
 <script src="<?= base_url() ?>assets3/zoom/jquery.zoom.js"></script>
 <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>



  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url() ?>node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>node_modules/summernote/dist/summernote-bs4.css">

   <link rel="stylesheet" href="node_modules/prismjs/themes/prism.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets3/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets3/css/components.css">
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" 
  crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

   
    
<script type="text/javascript" src="<?= base_url() ?>chartjs/Chart.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>loading/style.css">


</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar  ">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
         
        
            <div class="search-backdrop"></div>
            <div class="search-result">
              
            </div>
          </div>
        </form>
    
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-user"></i><span id="user" class="badge bg-success"></span></a>
           <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">User New
                <div class="float-right">
                  <a href="#"></a>
                </div>
              </div>

              <div id="user_baru" class="dropdown-list-content dropdown-list-icons">
                <div id="member">
                  
                </div>
              </div>
            
              <div class="dropdown-footer text-center">
                <a href="<?= base_url() ?>member/data_member">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>

         

          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="fas fa-cart-plus"></i><span id="shop" class="badge bg-danger"></span></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Order New
                <div class="float-right">
                  <a href="#"></a>
                </div>
              </div>

              <div id="order_baru" class="dropdown-list-content dropdown-list-icons">
                <div id="order-shop">
                    
                </div>
               
              </div>
            
              <div class="dropdown-footer text-center">
                <a href="<?= base_url() ?>temp_order/data_temp_order">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>


          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url() ?>assets3/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?= $this->session->userdata('username'); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right"> 
              <div class="dropdown-divider"></div>
              <a href="<?= base_url() ?>auth/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img alt="image" src="<?= base_url() ?>logo/logo1.png" class="rounded-circle mr-1" style="height: 40px; width: 30px;">
            
            <a href="index.html">Ebunga</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Ebg</a>
          </div>
          <ul class="sidebar-menu">

              <li class="menu-header">Dashboard</li>
                <li><a class="nav-link active" href="<?= base_url() ?>Dashbord/index"> <i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <!-- <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                  <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul> -->
              </li>
              <li class="menu-header"> Master</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li>  <a class="nav-link" href="<?= base_url() ?>branch_seller/data_branch_seller/">Branch Seller</a></li> 
                    <li><a class="nav-link" href="<?= base_url() ?>katagori/data_katagori/">Kategori Produk</a></li>
                    <li><a class="nav-link" href="<?= base_url() ?>member/data_member/">Member</a></li>
                   
                   <li><a class="nav-link" href="<?= base_url() ?>produk/data_produk">Produk</a></li>
                   <li><a class="nav-link" href="<?= base_url() ?>registrasi_user/data_registrasi/">Registrasi Member</a></li>
                     <li> <a class="nav-link" href="<?= base_url() ?>varian_produk/data_varian/">Variant Produk</a></li>

                  
               
                  <!--  <li>   <a class="nav-link" href="<?= base_url() ?>customer/data_customer/">Customer</a></li> -->
               <!--    <li> <a class="nav-link" href="<?= base_url() ?>customer_order/data_customer_order/">Customer Order</a></li> -->

                 <!--  <li> <a class="nav-link" href="<?= base_url() ?>temp_order/data_temp_order/">Temp Order</a></li>
                  <li><a class="nav-link" href="<?= base_url() ?>Komplain/data_komplain/">Komplain</a></li>

                  <li><a class="nav-link" href="<?= base_url() ?>operator/data_operator/">Operator</a></li>
                 -->
                 
                 

                 

                  <!--  <li>  <a class="nav-link" href="<?= base_url() ?>katagori/sub_kategori/"> Sub Katagori</a></li>

                  <li><a class="nav-link" href="<?= base_url() ?>user/data_user">User</a></li> -->
<!-- 
                  <li> <a class="nav-link" href="<?= base_url() ?>produk/data_produk">Produk</a></li>
                  <li>  <a class="nav-link" href="<?= base_url() ?>katagori/data_katagori/"> Katagori Produk</a></li> -->
               
                <!--   <li>  <a class="nav-link" href="<?= base_url() ?>variasi_produk/data_variasi_produk/">Variasi Produk</a></li> -->
                <!--   <li>   <a class="nav-link" href="<?= base_url() ?>promo/data_promo/">Promo</a></li> -->
                 <!--  <li> <a class="nav-link" href="<?= base_url() ?>bank_account/data_bank_account/">Bank Account</a></li> -->
                 

                  <!--  <li><a class="nav-link" href="<?= base_url() ?>blog/data_blog/">Blog</a></li> -->

                <!--   <li><a class="nav-link" href="<?= base_url() ?>address_list/data_address_list/">Address List</a></li> -->
                 <!--   <li><a class="nav-link" href="<?= base_url() ?>seller/data_seller/">Seller</a></li>
 -->
                   <!--   <li><a class="nav-link" href="<?= base_url() ?>branch_seller/data_branch_seller/">Branch Seller</a></li> -->

                </ul>
              </li>

               <!-- Data Produk -->

             



              <li class="menu-header">Order</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-fan"></i> <span>Data Order</span></a>
                <ul class="dropdown-menu">
                  <li> <a class="nav-link" href="<?= base_url() ?>pembayaran/data_pembayaran">Pembayaran</a></li>
                  <li> <a class="nav-link" href="<?= base_url() ?>temp_order/data_temp_order/">Temp Order</a></li>
                </ul>
              </li>

            <li class="menu-header">Produk Terlaris</li>
                <li><a class="nav-link active" href="<?= base_url() ?>Best_product/data_best_product"> <i class="fas fa-shopping-bag"></i> <span>Produk Terlaris</span></a></li>
            
              </li>


              <!-- Data Produk -->

       <!--         <li class="menu-header">Produk</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-fan"></i> <span>Produk</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url() ?>produk/data_produk">Data Produk</a></li>
                  <li>  <a class="nav-link" href="<?= base_url() ?>katagori/data_katagori/">Data Katagori Produk</a></li> -->
                  <!-- <li> <a class="nav-link" href="<?= base_url() ?>variasi_produk/data_variasi_produk/">Data Varian Produk</a></li> -->
                    <!-- <li> <a class="nav-link" href="<?= base_url() ?>varian_produk/data_varian/">Data Varian Produk</a></li>
                </ul>
              </li>
 -->
               <!-- seller -->

             <!--   <li class="menu-header">Seller</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Seller</span></a>
                <ul class="dropdown-menu"> -->
                <!--   <li><a class="nav-link" href="<?= base_url() ?>seller/data_seller/">Data Seller</a></li> -->
                  <!-- <li>  <a class="nav-link" href="<?= base_url() ?>branch_seller/data_branch_seller/">Data Branch Seller</a></li>
                </ul>
              </li> -->


            <!--   <li class="menu-header">Admin</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-lock"></i> <span>Admin</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url() ?>">Admin 1</a></li>
                  <li>  <a class="nav-link" href="<?= base_url() ?>">Admin 2</a></li>
                  <li>  <a class="nav-link" href="<?= base_url() ?>">Admin 3</a></li>
                </ul>
              </li> -->


              <li class="menu-header">Laporan</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i> <span>Laporan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url() ?>seller/laporan_seller">Laporan Seller</a></li>
                  <li>  <a class="nav-link" href="<?= base_url() ?>ecash/data_ecash">Laporan E-Cash</a></li>        
                </ul>
              </li>

               <!-- seller -->

               <li class="menu-header">Setting</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users-cog"></i> <span>Setting</span></a>
                <ul class="dropdown-menu">
                  <li>  <a class="nav-link" href="">Aplikasi</a></li>
                   <li>  <a class="nav-link" href="<?= base_url() ?>markup/data_markup/">Mark Up</a></li>
                  <li><a class="nav-link" href="<?= base_url() ?>user/data_user/">Operator</a></li>
                   <li><a class="nav-link" href="#"></a></li>

                </ul>
              </li>




              <!-- Laporan -->

               
             <!--  <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> -->
              
              
             
             
           
        </aside>
      </div>


      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
<script>




$(document).ready(function(){

  

  setInterval(function(){ 

     $.get("<?= base_url() ?>get_data/data_member", function(data,success){

        $("#member").html(data);


    });  

   }, 3000);

});



$(document).ready(function(){

  setInterval(function(){ 

     $.get("<?= base_url() ?>get_data/order", function(data,success){

        $("#order-shop").html(data);

    });  

   }, 3000);

});


$(document).ready(function(){

  setInterval(function(){ 

     $.get("<?= base_url() ?>get_data/jumlah_order", function(data,success){

        $("#shop").html(data);

    });  

   }, 3000);

});







 



</script>  

