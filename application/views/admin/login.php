<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin CMS | Log in |</title>
		<?php $this->load->view($script_top); ?>
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href=""><b>Program Penjadwalan Mata Pelajaran</b></a>
				<img src="">
			</div>
		  	<div class="login-box-body">
		    	<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/avatar-33.jpg');?>" >
				    <?php echo form_open('login/getlogin'); ?>
				    	<?php if($this->session->flashdata('info')): ?>
							<div><?php echo $this->session->flashdata('info'); ?></div>
						<?php endif; ?>
						<div class="form-group has-feedback">
							
							<input type="text" class="form-control" placeholder="Username"  name="username">
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="password" class="form-control" placeholder="Password" name="password">
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<div class="row">
							<div class="col-xs-4">
								<button type="submit" class="btn btn-primary btn-block btn-flat">LogIn</button>
							</div>
						</div>
				    <?php echo form_close(); ?>
		  	</div>
		</div>
		<?php $this->load->view($script_bottom); ?>
		<script>
		  $(function () {
		    $('input').iCheck({
		      checkboxClass: 'icheckbox_square-blue',
		      radioClass: 'iradio_square-blue',
		      increaseArea: '20%' // optional
		    });
		  });
		</script>
	</body>
</html>
