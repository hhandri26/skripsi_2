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
        <li <?php echo ($nav_sub == 'jadwal')? $active :""; ?>>
          <a href="<?php echo base_url('master/jadwal');?>"><i class="fa fa-ellipsis-v"></i>Jadwal Mata Pelajaran</a>
        </li>
       
      </ul>
    </li>
    <li class="treeview <?php echo ($nav_top == 'class_meet')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-university"></i>
        <span>Jadwal Kelas Meeting</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo ($nav_sub == 'class_meet')? $active :""; ?>>
          <a href="<?php echo base_url('admin/class_meet');?>"><i class="fa fa-ellipsis-v"></i>Penjadwalan Kelas Meeting</a>
        </li>
        <li <?php echo ($nav_sub == 'role')? $active :""; ?>>
          <a href="<?php echo base_url('admin/table_role');?>"><i class="fa fa-ellipsis-v"></i>Table Role</a>
        </li>         
      </ul>
    </li>

    <li class="treeview <?php echo ($nav_top == 'Laporan')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-file-pdf-o"></i>
        <span>Laporan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo ($nav_sub == 'guru')? $active :""; ?>>
          <a href="<?php echo base_url('admin/cetak/guru');?>"><i class="fa fa-ellipsis-v"></i>Data Guru</a>
        </li>
        <li <?php echo ($nav_sub == 'mapel')? $active :""; ?>>
          <a href="<?php echo base_url('admin/cetak/mapel');?>"><i class="fa fa-ellipsis-v"></i>Data Mata Pelajaran</a>
        </li>
        <li <?php echo ($nav_sub == 'ruangan')? $active :""; ?>>
          <a href="<?php echo base_url('admin/cetak/ruangan');?>"><i class="fa fa-ellipsis-v"></i>Data Ruangan</a>
        </li>
        <li <?php echo ($nav_sub == 'murid')? $active :""; ?>>
          <a href="<?php echo base_url('admin/cetak/murid');?>"><i class="fa fa-ellipsis-v"></i>Data Murid</a>
        </li>
        <li <?php echo ($nav_sub == '')? $active :""; ?>>
          <a href="<?php echo base_url('admin/cetak/jadwal');?>"><i class="fa fa-ellipsis-v"></i>Jadwal Mata Pelajaran</a>
        </li>
       
      </ul>
    </li>

</ul>