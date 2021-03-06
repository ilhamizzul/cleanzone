<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | CleanLaundry</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>assets/img/client/logo.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<?php 
								$success = $this->session->flashdata('success');
								$failed = $this->session->flashdata('failed');

								if (!empty($failed)) {
									echo '
										<div class="alert alert-danger alert-dismissible" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<i class="fa fa-times-circle"></i> '.$failed.'
										</div>
									';
								}

								if (!empty($success)) {
									echo '
										<div class="alert alert-success alert-dismissible" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<i class="fa fa-check-circle"></i> '.$success.'
										</div>
									';
								}
							?>
							<div class="header">
								<div class="logo text-center"><img src="<?php echo base_url() ?>assets/img/logoo.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form method="post" class="form-auth-small" action="<?php echo base_url()?>login/login">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" name="username" class="form-control" id="signin-email"  placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="signin-password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-warning btn-lg btn-block">LOGIN</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Clean Laundry</h1>
							<p>Pusat Laundry Terpercaya Dan Berkualitas Di Surabaya</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
							
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
