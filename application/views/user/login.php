<!DOCTYPE html>
<html lang="en-IN">
	<head>
		<meta charset="utf-8">
		<title>Perpustakaan</title>
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet'>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel='stylesheet'>
		<link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.ico">
		<style>
			body{font-family: 'Ropa Sans', sans-serif; color:#666; font-size:14px; color:#333}
			li,ul,body,input{margin:0; padding:0; list-style:none}
			#login-form{width:350px; background:#FFF; margin:0 auto; margin-top:70px; background:#f8f8f8; overflow:hidden; border-radius:7px}
			.form-header{display:table; clear:both}
			.form-header label{display:block; cursor:pointer; z-index:999}
			.form-header li{margin:0; line-height:60px; width:175px; text-align:center; background:#eee; font-size:18px; float:left; transition:all 600ms ease}

			/*sectiop*/
			.section-out{width:700px; float:left; transition:all 600ms ease}
			.section-out:after{content:''; clear:both; display:table}
			.section-out section{width:350px; float:left}

			.login{padding:20px}
			.ul-list{clear:both; display:table; width:100%}
			.ul-list:after{content:''; clear:both; display:table}
			.ul-list li{ margin:0 auto; margin-bottom:12px}
			.input{background:#fff; transition:all 800ms; width:247px; border-radius:3px 0 0 3px; font-family: 'Ropa Sans', sans-serif; border:solid 1px #ccc; border-right:none; outline:none; color:#999; height:40px; line-height:40px; display:inline-block; padding-left:10px; font-size:16px}
			.input,.login span.icon{vertical-align:top}
			.login span.icon{width:50px; transition:all 800ms; text-align:center; color:#999; height:40px; border-radius:0 3px 3px 0; background:#e8e8e8; height:40px; line-height:40px; display:inline-block; border:solid 1px #ccc; border-left:none; font-size:16px}
			.input:focus:invalid{border-color:red}
			.input:focus:invalid+.icon{border-color:red}
			.input:focus:valid{border-color:green}
			.input:focus:valid+.icon{border-color:green}
			#check,#check1{top:1px; position:relative}
			.btn{border:none; outline:none; background:#0099CC; border-bottom:solid 4px #006699; font-family: 'Ropa Sans', sans-serif; margin:0 auto; display:block; height:40px; width:100%; padding:0 10px; border-radius:3px; font-size:16px; color:#FFF}

			.social-login{padding:15px 20px; background:#f1f1f1; border-top:solid 2px #e8e8e8; text-align:right}
			.social-login a{display:inline-block; height:35px; text-align:center; line-height:35px; width:35px; margin:0 3px; text-decoration:none; color:#FFFFFF}
			.form a i.fa{line-height:35px}
			.fb{background:#305891} .tw{background:#2ca8d2} .gp{background:#ce4d39} .in{background:#006699}
			.remember{width:50%; display:inline-block; clear:both; font-size:14px}
			.remember:nth-child(2){text-align:right}
			.remember a{text-decoration:none; color:#666}

			.hide{display:none}

			/*swich form*/
			#signup:checked~.section-out{margin-left:-350px}
			#login:checked~.section-out{margin-left:0px}
			#login:checked~div .form-header li:nth-child(1),#signup:checked~div .form-header li:nth-child(2){background:#e8e8e8}
		</style>
	</head>
	<body>
		<div id="login-form">

			<div style="text-align: center;"><H1>ADMIN LOGIN</H1></div>
			<?php
			if (validation_errors() || $this->session->flashdata('result_login')) {
			?>
				<br/>
				<div class="alert alert-error" style="text-align: center">
					<strong>Warning!</strong>
					<?php echo validation_errors(); ?>
					<?php echo $this->session->flashdata('result_login'); ?>
				</div>
			<?php } ?>
			<div class="section-out">
				<section class="login-section">
				<div class="login">
					<form action="<?php echo site_url('Login/actionlogin'); ?>" method="post">
						<ul class="ul-list">
							<li><input type="email" name="email" class="input" required placeholder="Email" maxlength="50" value="<?php echo set_value('email'); ?>"/><span class="icon"><i class="fa fa-user"></i></span></li>
							<li><input type="password" name="password" class="input" required placeholder="Kata Sandi" minlength="5" maxlength="50" value="<?php echo set_value('password'); ?>"/><span class="icon"><i class="fa fa-lock"></i></span></li>
							<li><span class="remember"><input type="checkbox" id="check"> <label for="check">Ingat saya</label></span><span class="remember"><a href="">Lupa kata sandi?</a></span></li>
							<li><input type="submit" value="Masuk" class="btn"></li>
						</ul>
					</form>
				</div>
				<div class="social-login">Or sign in with &nbsp;
					<a href="" class="fb"><i class="fa fa-facebook"></i></a>
					<a href="" class="gp"><i class="fa fa-google-plus"></i></a>
				</div>
				</section>
			</div>
		</div>
	</body>
</html>