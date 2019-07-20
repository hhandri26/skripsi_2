<?php 
  $active = "class='active'";
  $class = 'active'; 
?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active">
      <a href="">
        <i class="fa fa-home"></i> <span>Dashboard</span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo ($nav_sub == 'home')? $active :""; ?>>
          <a href="<?php echo base_url('admin');?>">
        <i class="fa fa-home"></i> home</a></li>
      </ul>
    </li>
    

    <li class="treeview <?php echo ($nav_top == 'master')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-university"></i>
        <span>Master</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo ($nav_sub == 'guru')? $active :""; ?>>
          <a href="<?php echo base_url('master/guru');?>"><i class="fa fa-ellipsis-v"></i>Data Guru</a>
        </li>
        <li <?php echo ($nav_sub == 'mapel')? $active :""; ?>>
          <a href="<?php echo base_url('master/mapel');?>"><i class="fa fa-ellipsis-v"></i>Data Mata Pelajaran</a>
        </li>
        <li <?php echo ($nav_sub == 'ruangan')? $active :""; ?>>
          <a href="<?php echo base_url('master/ruangan');?>"><i class="fa fa-ellipsis-v"></i>Data Ruangan</a>
        </li>
        <li <?php echo ($nav_sub == 'murid')? $active :""; ?>>
          <a href="<?php echo base_url('master/murid');?>"><i class="fa fa-ellipsis-v"></i>Data Murid</a>
        </li>
       
      </ul>
    </li>

</ul>