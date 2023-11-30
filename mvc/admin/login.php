<?php
    session_start();
    include "../model/conn.php";
    include "../model/user.php";
    if(isset($_POST["login"])){
        $uname=$_POST["uname"];
        $psw=$_POST["psw"];
        $user=checkuser($uname,$psw);
        if(isset($user)&&(is_array($user))&&(count($user)>0)){
            extract($user);
            if($role==1){
                $_SESSION['s_user']=$user;
                header('location: ../init.php');
            }else{
                $tb="Tài khoản này không có quyền đăng nhập trang quản trị";
            }
        }else{
            $tb="Tài khoản này không tồn tại!";
        }
        

    }
?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../../public/css2/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><b>TIMEZONE</b></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(../../public/img/hero/hero-3.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="login.php" class="signin-form" method="POST" enctype="multipart/form-data" >
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="Username" name="uname" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Password" name="psw" required>
		            </div>
					<?php
						if(isset($tb)&&($tb!="")){
							echo "<h5 style='color:red'>".$tb."</h5>";
						}
    				?>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" name ="login" value="login" >Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a  href="init.php?page=register">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="../public/js2/jquery.min.js"></script>
  <script src="../public/js2/popper.js"></script>
  <script src="../public/js2/bootstrap.min.js"></script>
  <script src="../public/js2/main.js"></script>

	</body>
</html>


