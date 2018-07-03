<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?php echo base_url() ?>assets/img/logoo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>	
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url() ?>assets/uploads/profile_pict/<?php echo $this->session->userdata('foto_profil'); ?>" class="img-circle" alt="Avatar"> <span><?php echo $this->session->userdata('nama_admin') ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url() ?>index.php/login/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo base_url() ?>index.php/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php echo base_url() ?>index.php/galeri"><i class="lnr lnr-camera"></i> <span>Galeri</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cart"></i> <span>Order</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-rocket"></i> <span>Info</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo base_url() ?>index.php/promosi" class="">Promosi</a></li>
									<li><a href="<?php echo base_url() ?>index.php/iklan" class="">Iklan</a></li>
								</ul>
							</div>
						</li>
						
						<!-- <li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pencil"></i> <span>Data Registrasi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo base_url() ?>index.php/register" class="">Registrasi A</a></li>
									<li><a href="page-login.html" class="">Registrasi B</a></li>
								</ul>
							</div>
						</li> -->
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
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
					<!-- OVERVIEW -->
					<?php 
						$this->load->view($main_view);
					?>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<!-- <footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer> -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->

	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/klorofil-common.js"></script>
	<script type="text/javascript">
	//IKLAN
		function prepare_update_iklan(id_informasi) {
		    $('#update_id_informasi_iklan').empty();
		    $('#update_nama_informasi_iklan').empty();
		    $('#update_foto_iklan').empty();

		  $.getJSON('<?php echo base_url(); ?>index.php/iklan/get_iklan_by_id/' + id_informasi, function(data) {
		    $('#update_id_informasi_iklan').val(data.id_informasi);
		    $('#update_nama_informasi_iklan').val(data.nama_informasi);
		    $('#update_foto_iklan').attr('src', '<?php echo base_url('assets/uploads/iklan/') ?>'+data.gambar);
		  });
		}

		function prepare_delete_iklan(id_informasi) {
			$('#delete_foto_iklan').empty();

			$.getJSON('<?php echo base_url() ?>index.php/iklan/get_iklan_by_id/' + id_informasi, function(data) {
				$('#delete_id_informasi_iklan').attr('href', '<?php echo base_url('index.php/iklan/delete/') ?>'+data.id_informasi);
				$('#delete_foto_iklan').attr('src', '<?php echo base_url('assets/uploads/iklan/') ?>'+data.gambar);
			});
		}

	//PROMOSI
		function prepare_update_promosi(id_informasi) {
		    $('#update_id_informasi_promosi').empty();
		    $('#update_nama_informasi_promosi').empty();
		    $('#update_foto_promosi').empty();

		  $.getJSON('<?php echo base_url(); ?>index.php/promosi/get_promosi_by_id/' + id_informasi, function(data) {
		    $('#update_id_informasi_promosi').val(data.id_informasi);
		    $('#update_nama_informasi_promosi').val(data.nama_informasi);
		    $('#update_foto_promosi').attr('src', '<?php echo base_url('assets/uploads/promosi/') ?>'+data.gambar);
		  });
		}

		function prepare_delete_promosi(id_informasi) {
			$('#delete_foto_promosi').empty();

			$.getJSON('<?php echo base_url() ?>index.php/promosi/get_promosi_by_id/' + id_informasi, function(data) {
				$('#delete_id_informasi_promosi').attr('href', '<?php echo base_url('index.php/promosi/delete/') ?>'+data.id_informasi);
				$('#delete_foto_promosi').attr('src', '<?php echo base_url('assets/uploads/promosi/') ?>'+data.gambar);
			});
		}

	//GALERI
		function prepare_update_galeri(id_gambar) {
		    $('#update_id_gambar').empty();
		    $('#update_deskripsi_galeri').empty();
		    $('#update_sub_deskripsi_galeri').empty();
		    $('#update_foto_galeri').empty();


		  $.getJSON('<?php echo base_url(); ?>index.php/galeri/get_gambar_by_id/' + id_gambar, function(data) {
		    $('#update_id_gambar').val(data.id_gambar);
		    $('#update_deskripsi_galeri').val(data.deskripsi);
		    $('#update_sub_deskripsi_galeri').val(data.sub_deskripsi);
		    $('#update_foto_galeri').attr('src', '<?php echo base_url('assets/uploads/galeri/') ?>'+data.gambar);

		  });
		}

		function prepare_delete_galeri(id_gambar) {
			$('#delete_foto_galeri').empty();

			$.getJSON('<?php echo base_url() ?>index.php/galeri/get_gambar_by_id/' + id_gambar, function (data) {
				$('#delete_foto_galeri').attr('src', '<?php echo base_url('assets/uploads/galeri/') ?>' + data.gambar);
				$('#delete_id_gambar').attr('href', '<?php echo base_url('index.php/galeri/hapus/') ?>' + data.id_gambar);
			})
		}
	</script>
</body>

</html>
