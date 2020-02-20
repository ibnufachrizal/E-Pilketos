<?php  

require_once 'core/init.php';

if(!isset($_SESSION['admin'])){
  header('Location: login.php');
}else{

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/ripple.css">
	<link rel="stylesheet" href="../assets/css/darkmodes-desktop.css">
	<link rel="stylesheet" href="../assets/css/darkmodes-mobile.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="../assets/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
	<!-- Skin Blue -->
	<link rel="stylesheet" href="../assets/css/skin-blue.min.css">
	<!-- Data Tables -->
	<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
	<!-- Sweet Alert -->
	<link rel="stylesheet" href="../assets/css/sweetalert.css">
	<link rel="shortcut icon" type="image/png" href="../assets/img/smkin.png"/>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- REQUIRED JS SCRIPTS -->
	<!-- jQuery -->
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap -->
	<script src="../assets/js/bootstrap.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../assets/js/app.min.js"></script>
	<!-- Data Tables -->
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/dataTables.bootstrap.min.js"></script>

	<style>
		@font-face {
			font-family: Google;
			src: url("../assets/fonts/google/Google.ttf");
		}

		* {
			font-family: Google;
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
		}

		.tombol-blue {
			background: #1C58C7;
			color: white;
		}
		
		.tombol-red {
			background: #f71945;
			color: white;
		}

		.tombol-green {
			background: #40db7b;
			color: white;
		}

		.tombol-cyan {
			background: #45a2ce;
			color: white;
		}

		.active {
			background: rgba(000,000,000,.2);
			border-left: 3px solid white;
		}
		
		.bar {
			width:100%;
			height:3px;
			position: absolute;
			background:#acece6;
			overflow:hidden;
			z-index: 1;
		}

		.bar div:before {
			content:"";
			position:absolute;
			top:0px;
			left:0px;
			bottom:0px;
			background:#26a69a;
			animation:box-1 2100ms cubic-bezier(0.65,0.81,0.73,0.4) infinite;
		}

		.bar div:after {
			content:"";
			position:absolute;
			top:0px;
			left:0px;
			bottom:0px;
			background:#26a69a;
			animation:box-2 2100ms cubic-bezier(0.16,0.84,0.44,1) infinite;
			animation-delay:1150ms;
		}
	
		@keyframes box-1 {
			0% {
				left:-35%;
				right:100%;
			}

			60%,100% {
				left:100%;
				right:-90%;
			}
		}

		@keyframes box-2 {
			0% {
				left:-200%;
				right:100%;
			}

			60%,100% {
				left:107%;
				right:-8%;
			}
		}

		/* Scrollbar */

		/* width */
		::-webkit-scrollbar {
			width: 10px;
		}

		/* Track */
		::-webkit-scrollbar-track {
			background: #f1f1f1;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #888;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #555;
		}

		/* End of Scrollbar */

		#navMenu1 {
			position: fixed;
			transition: top 0.3s;
		}

		#navMenu2 {
			position: fixed;
			transition: top 0.3s;
		}

		/* Mobile Mode */

		@media only screen and (max-width: 767px) {
			/* Ripple Effect */
			.rippleM {
				position: relative;
				overflow: hidden;
				transform: translate3d(0, 0, 0);
				border-radius: 17px;
			}

			.rippleM:hover {
				background: rgba(000,000,000,.1);
			}

			.rippleM:after {
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

			.rippleM:active:after {
				transform: scale(0, 0);
				opacity: .3;
				transition: 0s;
			}
			
			#navMenu1 {
				background-color: #fff;
				color: #1c58c7;
				box-shadow: 1px 2px 10px rgba(000,000,000, .3);
				top: 10px;
				width: 97%;
				left: 10px;
				right: 10px;
				border-radius: 17px;
				transition: top 0.3s;
			}

			#navMenu2 {
				top: 10px;
				left: 10px;
				right: 10px;
				width: 97%;
				color: #1c1c1c;
				transition: top 0.3s;
			}

			#admin {
				background: white;
			}

			#admin:hover {
				background: rgba(000,000,000,.1);
			}

			#headSide {
				margin-top: -17px;
			}

			#Side {
				position: absolute;
			}

			#headSide .active {
				background: white;
			}

			#dashHead {
				padding-top: 100px;
			}
			
			#gears {
				color: #1c1c1c;
			}
			
			#toggle {
				color: #1c1c1c;
			}
			
			#imgAdmin {
				margin-top: -3px;
			}
			
			#gears:focus {
				background: rgba(000,000,000,.1);
			}
			
			#admin-menu {
				border: none;
				background: #1c58c7;
				box-shadow: 1px 2px 10px rgba(000,000,000, .2);
			}

			#box {
				margin-top: 10px;
			}
			
			#foto {
				margin-left: auto;
				margin-right: auto;
				box-shadow: 1px 2px 10px rgba(000,000,000, .1);
				margin-top: 10px;
			}

			#rows {
				margin-top: 5px;
			}

			#sidemenu {
				position: fixed;
				background: #1c58c7;
			}
			
			#sidemenu .sidebar {
				margin-top: -28px;
			}

			#header {
				background: transparent;
				height: 2px;
				margin-top: -70px;
			}

			#headCalon {
				padding-top: 95px;
			}

			#headData {
				padding-top: 95px;
			}

			#subBox {
				border-radius: 17px;
			}
		}

		/* Mobile Mode Portrait */
		@media only screen and (max-width: 411px) {
			#navMenu1 {
				background-color: #fff;
				color: #1c58c7;
				box-shadow: 1px 2px 10px rgba(000,000,000, .3);
				top: 10px;
				width: 95%;
				left: 10px;
				right: 30px;
				border-radius: 17px;
			}

			#navMenu2 {
				top: 10px;
				left: 10px;
				right: 30px;
				width: 95%;
				color: #1c1c1c;
			}
		}

		/* Desktop Mode */
		@media only screen and (min-width: 761px) {
			#navMenu1 {
				background-color: #f0f0f0;
				color: #1c58c7;
				z-index: 2;
			}

			#navMenu2 {
				background-color: #fff;
				width: 100%;
				box-shadow: 1px 2px 10px rgba(000,000,000, .2);
				z-index: 1;
			}

			#gears {
				color: #1c1c1c;
			}

			#toggle {
				color: #1c1c1c;
			}

			#admin-menu {
				border: none;
				background: #1c58c7; 
				box-shadow: 1px 2px 10px rgba(000,000,000, .2);
			}

			#admin {
				color: #1c1c1c;
				background: white;
			}

			#admin:hover {
				background: rgba(000,000,000,.05);
			}

			#subBox {
				margin-top: -5px;
			}

			#sidemenu {
				position: fixed;
				background: #1c58c7;
			}

			#contentCalon {
				border-radius: 15px;
				border: none;
				box-shadow: 1px 2px 10px rgba(000,000,000, .2);
			}

			#cardCalon {
				box-shadow: 1px 2px 10px rgba(000,000,000, .1);
				left: 15px;
			}

			#userMenus {
				position: fixed;
				right: 45px;
			}

			#gears-li {
				position: fixed;
				right: 0;
			}

			.sidebar-collapse {
				transition: left 0.3s;
			}
		}

	</style>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

	<!-- Main Header -->
	<header class="main-header" id="header" style="padding: 0; height: 50px;">

		<!-- Logo -->
		<a href=""  class="logo" id="navMenu1">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><img src="../assets/img/smkin.png" style="width: 75%; margin-top: -2px"></span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><img src="../assets/img/smkin.png" style="width: 30px; margin-right: 7px; margin-top: -2px"><b>Pilketos</b></span>
		</a>

		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top" role="navigation" id="navMenu2">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle rippleM" id="toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>

			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- User Account Menu -->
					<li class="dropdown user user-menu" id="userMenus">
						<!-- Menu Toggle Button -->
						<button href="#" class="dropdown-toggle toggle ripple" data-toggle="dropdown" id="admin" style="height: 50px; border: none; padding-right: 15px; padding-left: 15px;">
							<!-- The user image in the navbar-->
							<img src="../assets/img/avatar.jpg" class="user-image" alt="User Image" id="imgAdmin">
							<!-- hidden-xs hides the username on small devices so only the image appears. -->
							<span class="hidden-xs" id="spanAdmin"><?php echo adminTampilSession($_SESSION['admin']); ?></span>
						</button>
						<ul class="dropdown-menu" id="admin-menu">
							<!-- The user image in the menu -->
							<li class="user-header">
								<img src="../assets/img/avatar.jpg" class="img-circle" alt="User Image">
								<p style="color: white">
									<?php echo adminTampilSession($_SESSION['admin']); ?>
									<small><i class="fa fa-circle" style="color: #40db7b; margin-right: 3px"></i> Online</small>
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="#" data-toggle="control-sidebar" class="ripple btn" style="background: #0dbf43; color: white;">Profile</a>
								</div>
								<div class="pull-right">
								<form action="" method="post">
									<input type="submit" name="out" value="Sign Out" class="btn ripple" style="background: #f71945; color: white">
								</form>
									<?php  
										if(isset($_POST['out'])){
											unset($_SESSION['admin']);
											header("Location:".$_SERVER['PHP_SELF']);
										}
									?>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
					<li class="rippleM" id="gears-li">
						<a href="#" data-toggle="control-sidebar" id="gears"><i class="fa fa-gears"></i></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar" id="sidemenu">

		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			<!-- Sidebar user panel (optional) -->
			<div class="user-panel" style="margin: 7px 0px">
				<div class="pull-left image">
					<img src="../assets/img/avatar.jpg" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p style="color: white">
						<?php echo adminTampilSession($_SESSION['admin']); ?>
					</p>
					<!-- Status -->
					<a style="color: white"><i class="fa fa-circle" style="color: #40db7b"></i> Online</a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<ul class="sidebar-menu">
				<li class="header" style="color: white">MENU</li>
				<!-- Optionally, you can add icons to the links -->
				<li id="dashboard">
					<a href="?p=dashboard" style="color: white" class="ripple" id="btnDashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
				</li>
				<li id="calon">
					<a href="?p=calon" style="color: white" class="ripple" id="btnCalon"><i class="fa fa-users"></i> <span>Calon</span></a>
				</li>
				<li id="data">
					<a href="?p=data_pemilih" style="color: white" class="ripple" id="btnData"><i class="fa fa-table"></i> <span>Data Pemilih</span></a>
				</li>
			</ul>
			<!-- /.sidebar-menu -->
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper" id="content">
		
	<?php  

	$p = @$_GET['p'];

	if($p == '')include 'pages/Dashboard.php';
	else if($p == 'dashboard')include 'pages/Dashboard.php';
	else if($p == 'calon')include 'pages/Calon.php';
	else if($p == 'data_pemilih')include 'pages/Data_pemilih.php';
	else include 'pages/404.php';

	?>

	</div>
	<!-- /.content-wrapper -->

	<!-- Main Footer -->
	<footer class="main-footer">
		<!-- To the right -->
		<!-- Default to the left -->
		<strong>Copyright &copy; <?=date('Y') ?> <a href="http://smk-informatika-srg.sch.id/">SMK Informatika Kota Serang </a>.</strong> 
		All rights reserved.
	</footer>

	<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" id="Side">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs" id="headSide">
      <li class="active" style="border: none"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-users"></i></a></li>
      <li style="border: none"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-user-plus"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab" style="background: transparent; border: none">
        <h3 class="control-sidebar-heading">&nbsp;<b>Admin</b></h3>
        <ul class="control-sidebar-menu" id="view-admin">
          <?php include 'ajax/admin-view.php'; ?>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab" style="border: none; background: transparent">
        <form method="post"  id="formtambah">
          <h3 class="control-sidebar-heading"><b>Tambah Admin</b></h3>
		  <small>* wajib diisi!!</small>
          <div class="form-group">
            <label for="nama">Nama Lengkap *</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" id="namaAdmin">
          </div>
          <div class="form-group">
            <label for="user">Username *</label>
            <input type="text" class="form-control" name="user" placeholder="Username" id="user">
          </div>
          <div class="form-group">
            <label for="pass">Password *</label>
            <input type="password" class="form-control" name="pass" placeholder="Password" id="pass">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="mail@mail.com" id="mail">
          </div>

        </form><br>
        <!-- /.form-group -->
        <button type="button" class="btn ripple" id="btn-tambahAdmin" style="float: left; background: #1c58c7; color: white; outline: none">Tambah</button>
        <div id="loadingTambah">&nbsp;&nbsp;&nbsp;Loading...</div>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper --> 

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Form Ubah Data</h4>
        <img src="../assets/img/loading.gif" alt="" id="loadingUbah" style="height: 45px;">
      </div>
      <div class="modal-body">
        <form method="post" id="formubah">
        	<input type="hidden" id="idAdmin">
					<div class="form-group">
						<label for="">Nama</label>
						<input class="form-control" type="text" id="nameAdmin" placeholder="Nama">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input class="form-control" type="text" id="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="">Password lama</label>
						<input class="form-control" type="password" id="passwordlama" placeholder="Password lama">
					</div>
					<div class="form-group">
						<label for="">Password baru</label>
						<input class="form-control" type="password" id="passwordbaru" placeholder="Password baru">
					</div>
					<div class="form-group">
						<label for="">Password baru verifikasi</label>
						<input class="form-control" type="password" id="passwordverif" placeholder="Password baru">
						<small id="passSalah">Password Verifikasi salah!</small>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="email" id="email" placeholder="Email">
					</div>
				</form>
      </div>
      <div class="modal-footer">
	      <button type="button" class="btn btn-primary btn-flat" id="btn-ubahAdmin">Ubah</button>
        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hapus">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" style="border-radius: 10px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Konfirmasi</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="id-val">
        <div>Apakah anda yakin ingin menghapus data ini?</div>
        <img src="../assets/img/loading.gif" alt="" id="loadingHapus" style="height: 45px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn ripple" style="background: #f71945; color: white; border-radius: 7px; outline: none" id="btn-hapusAdmin">Ya</button>
        <button type="button" class="btn ripple" style="background: #f0f0f0; color: #1c1c1c; border-radius: 7px; outline: none" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>
<!-- /.Modal -->

<!-- Sweet Alert -->
<script src="../assets/js/sweetalert.min.js"></script>
<!-- TinyMCE -->
<script src="../assets/tinymce/tinymce.min.js"></script>
<!-- Ajax -->
<script src="../assets/js/ajax.js"></script>
<!-- Highchart -->
<script src="../assets/js/highcharts.js"></script>
<!-- jQuery easeScroll -->
<script src="../assets/js/jquery.easeScroll.js"></script>
<!-- Script -->
<script src="../assets/js/script.js"></script>
<script>

	$(document).ready(function(){
		// easeScroll
		$("html").easeScroll();

		$(window).on("orientationchange load resize", function() {
			var width = $(document).width();
			var prevScrollpos = window.pageYOffset;
			document.getElementById("navMenu2").style.top = "10px";
			document.getElementById("navMenu1").style.top = "10px";
			if(width < 766) {
				window.onscroll = function() {
					var currentScrollPos = window.pageYOffset;
					if(prevScrollpos > currentScrollPos) {
						document.getElementById("navMenu1").style.top = "10px";
						document.getElementById("navMenu2").style.top = "10px";
					} else {
						document.getElementById("navMenu1").style.top = "-50px";
						document.getElementById("navMenu2").style.top = "-50px";
					}
					prevScrollpos = currentScrollPos;
				}
			} else if(width > 766) {
				document.getElementById("navMenu1").style.top = "0";
				document.getElementById("navMenu2").style.top = "0";
				
				window.onscroll = function() {
					var currentScrollPos = window.pageYOffset;
					if(prevScrollpos > currentScrollPos) {
						document.getElementById("navMenu1").style.top = "0";
						document.getElementById("navMenu2").style.top = "0";
					} else {
						document.getElementById("navMenu1").style.top = "0";
						document.getElementById("navMenu2").style.top = "0";
					}
					prevScrollpos = currentScrollPos;
				}
			}
		});
		
	});
	
</script>

</body>
</html>
<?php 
}
?>