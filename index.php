<?php  
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Pilketos</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- SweetAlert -->
    <link rel="stylesheet" href="assets/css/sweetalert.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/smkin.png"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      * {
        font-family: Google Sans;
      }

      .tombol {
        padding: 7px 12px;
        margin-left: 3px;
        margin-right: 3px;
        border: none;
        border-radius: 7px;
      }

      .tombol:focus {
        outline: none;
        background: rgba(000,000,000,.1);
      }

      .tombol-blue {
        background: #1C58C7;
        color: white;
      }

      .tombol-blue:hover {
        background: rgba(000,000,000,.1);
      }

      .tombol-ocean {
        background: #1C58C7;
        color: white;
      }

      .tombol-ocean:hover {
        background: rgba(000,000,000,.1);
      }

      /* Mobile Mode */
      @media only screen and (max-width: 760px) {
        #navbar {
            height: 10px;
            transition: top 0.3s;
        }

        #kpo {
          margin-left: auto;
          margin-right: auto;
          margin-top: 20px;
        }
        
        #desc {
          background: #f0f0f0;
          margin-top: 15px;
          padding: 15px 20px;
          border-radius: 20px;
        }
        
        #welcome h1 {
          text-align: center;
        }
        
        #welcome p {
          text-align: center;
        }
        
        #welcome #logBox {
          margin-left: auto;
          margin-right: auto;
        }
        
        #btnLogin {
          margin-top: 15px;
        }

        #logo {
          width: 100px;
          margin-left: 10px;
        }

        #boxUser {
          right: 0;
        }

        #btnUser {
          width: auto;
          background: transparent;
          position: absolute;
          right: 0;
          margin-top: auto;
          margin-bottom: auto;
        }

        #btnUser span {
          color: #1c1c1c;
          top: 2px;
        }

        .headBoxUser {
          background: transparent;
          padding: 0;
          position: absolute;
          top: 49px;
          box-shadow: 1px 7px 5px rgba(000,000,000, .1);
          right: 30px;
        }

        /* End of Mobile Mode */

        .ripple {
          position: relative;
          overflow: hidden;
          transform: translate3d(0, 0, 0);
        }

        .ripple:hover {
          background: rgba(000,000,000,.1);
        }

        .ripple:after {
          content: "";
          display: block;
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          pointer-events: none;
          background-image: radial-gradient(circle, rgba(000,000,000,.3) 10%, transparent 10.01%);
          background-repeat: no-repeat;
          background-position: 50%;
          transform: scale(10, 10);
          opacity: 0;
          transition: transform .5s, opacity 1s;
        }

        .ripple:active:after {
          transform: scale(0, 0);
          opacity: .3;
          transition: 0s;
        }
      }
    </style>
  </head>
  <body>

  <!-- Main Header -->
  <header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation" id="navbar">
    <?php
      if(!empty($_SESSION['user'])) {
    ?>
      <button type="button" class="navbar-toggle collapsed ripple hidden" id="btnUser" data-toggle="collapse" data-target="#collapse">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>
    <? } else { ?>
      <button type="button" class="navbar-toggle collapsed ripple" id="btnUser" data-toggle="collapse" data-target="#collapse">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>
    <?php } ?>
      <div class="container">
        <div class="navbar-header">
          <!-- Logo -->
          <a href="#" class="logo">
            <img src="assets/img/logo.png" id="logo" alt="" class="img-responsive" style="">
          </a>
        </div>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu navbar-collapse headBoxUser" id="collapse">
          <ul class="nav navbar-nav" id="boxUser">
            <?php if (isset($_SESSION['user'])) {?>
              <li id="user">
              <?php 
                $session = $_SESSION['user'];
                $tampil = mysqli_fetch_assoc(tampilUser($session))
              ?>
                <b style="text-transform: uppercase;"><?=$tampil['nama']; ?></b><br>
                <i style="text-transform: uppercase;"><?=$tampil['kelas']; ?></i>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
      
    </nav>
  </header>
  
  <div class="container">

  <?php
      if(!empty($_SESSION['user'])){
        sudahLogin();
      }else{
        belumLogin();
      } 
  ?>    

  </div>
    
    <footer class="footer">
      <div class="container">
        <span class="pull-left"><strong>Copyright &copy; <?=date('Y'); ?></strong> . SMK Informatika Kota Serang</span>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Sweet Alert -->
    <script src="assets/js/sweetalert.min.js"></script>
    <!-- Ajax -->
    <script src="assets/js/ajax.js"></script>
  </body>
</html>