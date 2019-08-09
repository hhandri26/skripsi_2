<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:100%;
      border-radius: 5px;
    }
 
    .short{
      width: 20px;
    }
 
    .normal{
      width: 120px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
	<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
	  			<th class="short">#</th>
                    <th class="normal">Kode mapel</th>
                    <th class="normal">Nama Mata Pelajaran</th>
	  		    </tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($mapel as $row): ?>
	  		  <tr>
	  			    <td><?php echo $no; ?></td>
                    <td><?php echo $row->kd_mapel ;?></td>
                    <td><?php echo $row->nama_mapel ;?></td>
	  		  </tr>
	  		<?php $no++; ?>
	  		<?php endforeach; ?>
	  	</tbody>
	  </table>
	 </div>
</body>
</html>