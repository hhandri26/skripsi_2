<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view($script_top); ?>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/cpanel.png');?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>A</b>DM</span>
      <span class="logo-lg"><b><?php echo $this->session->userdata('username');?></b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Menu</span>
      </a>
      <!-- Navbar Right Menu -->
     
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/img/avatar-33.jpg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/img/avatar-33.jpg');?>" class="img-circle" alt="User Image">
                <p><?php echo $this->session->userdata('username');?><small>2019</small></p>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout');?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

  </header>
  <!--side nav-->
  <aside class="main-sidebar">
    <section class="sidebar">
      <?php $this->load->view($admin_nav); ?>
    </section>
  </aside>
  <!--Kontent-->
   <div class="content-wrapper">
     <section class="content-header">
      <h1>
       <?php echo $judul ; ?>
        <small><?php echo $sub_judul; ?></small>
      </h1>
    
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php if($this->session->flashdata('info')): ?>        
                  <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Info!</h4>
                  <?php echo $this->session->flashdata('info'); ?>
                  </div>
              <?php endif; ?>
              <?php if($this->session->flashdata('danger')): ?>  
                  <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-ban"></i> opps!</h4>
                  <?php echo $this->session->flashdata('danger'); ?>
                  </div>
              <?php endif; ?>
              <?php $this->load->view($content); ?>
            </div>
          </div>
        </div>
      </div>
      </section>
   
  </div>

  <!--Footer-->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2019 <a href="mailto:handrisaeputra@gmail.com"></a>.</strong> All rights
    reserved.
  </footer>

</div>
<?php $this->load->view($script_bottom); ?>

</body>
</html>
