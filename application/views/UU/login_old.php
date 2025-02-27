<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Undang-Undang</title>
		<link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.ico">
		<!-- Bootstrap -->
		<link href="<?=base_url('assets4/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?=base_url('assets4/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
		<!-- NProgress -->
		<link href="<?=base_url('assets4/vendors/nprogress/nprogress.css');?>" rel="stylesheet">
		<!-- Animate.css -->
		<link href="<?=base_url('assets4/vendors/animate.css/animate.min.css');?>" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="<?=base_url('assets4/build/css/custom.min.css');?>" rel="stylesheet">
	</head>

	<body class="login">
		<div>
			<a class="hiddenanchor" id="signup"></a>
			<a class="hiddenanchor" id="signin"></a>

			<div class="login_wrapper">
				<div class="animate form login_form">
					<section class="login_content">
						<h5><?= $this->session->flashdata('error') ?></h5>
						<form action="<?php echo site_url('Uu/masuk'); ?>" method="post">
							<h1>Admin Login</h1>
							<div>
								<input type="email" class="form-control" placeholder="Your email" required="" name="email" />
							</div>
							<div>
								<input type="password" class="form-control" placeholder="Password" required="" name="password" />
							</div>
							<div>
								<button type="submit" class="btn btn-default submit">Log in</button>
							</div>

							<div class="clearfix"></div>

							<div class="separator">
								<!-- <p class="change_link">New to site?
								<a href="#signup" class="to_register"> Create Account </a>
								</p> -->

								<div class="clearfix"></div>
								<br />

								<div>
									<!-- <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1> -->
									<p>Copyright &copy; 2019 | Si-PURI</p>
								</div>
							</div>
						</form>
					</section>
				</div>
			</div>
		</div>
	</body>
</html>