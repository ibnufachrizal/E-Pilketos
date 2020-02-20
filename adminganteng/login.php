<?php  
  
require_once 'core/init.php';

if(isset($_SESSION['admin'])){
  header('Location: index.php');
}else{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Area</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
  <!-- Sweet Alert -->
  <link rel="stylesheet" href="../assets/css/sweetalert.css">
  <script src="../assets/js/sweetalert.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="../assets/img/smkin.png"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style>
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

    .show {
      position: absolute; 
      height: 100%; 
      margin-left: 256px; 
      border: none;
      background: transparent;
      width: 35px;
      outline: none;
      border-radius: 50px;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="">
      <img src="../assets/img/logo.png" alt="" class="img-responsive">
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Please sign in to continue.</p>

    <form action="" method="post" id="form-login">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <div onclick="showPass()" class="ripple show" id="show">
          <span class="glyphicon glyphicon-eye-open" id="icon-show" style="margin-top: 25%; margin-left: 30%"></span>
        </div>
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

<?php  

if(isset($_POST['submit'])){
  $user = trim($_POST['username']);
  $pass = trim($_POST['password']);

  if (!empty($user) || !empty($pass)) {
    if(user_admin($user)){
      if(pass_admin($user, $pass)){
        $_SESSION['admin'] = $user;
        header("Location: index.php");
      }else{
        echo"<script>swal('Oops...', 'Password salah', 'error');</script>";
      }
    }else{
      echo"<script>swal('Oops...', 'Username salah/tidak terdaftar', 'error');</script>";
    }    
  }else{
    echo"<script>swal('Oops...', 'Form tidak boleh kosong', 'error');</script>";
  } 

}

?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/js/bootstrap.min.js"></script>

<script>
  function showPass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
      $("#icon-show").addClass("glyphicon-eye-close");
      $("#icon-show").removeClass("glyphicon-eye-open");
    } else {
      x.type = "password";
      $("#icon-show").removeClass("glyphicon-eye-close");
      $("#icon-show").addClass("glyphicon-eye-open");
    }
  }
</script>

</body>
</html>

<?php  
}
?>
