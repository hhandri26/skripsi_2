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
      width: 100px;
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
                    <th class="normal">Nama pertandingan</th>
                    <th class="normal">Jenis Olahraga</th>
                    <th class="normal">Hari</th>
                    <th class="normal">Ronde</th>
                    <th class="normal">Kelas </th>
	  		    </tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($classmeet as $row): ?>
	  		  <tr>
	  			    <td><?php echo $no; ?></td>
                        <td><?php echo $row->nama_pertandingan ;?></td>
                        <td><?php echo $row->jenis_olahraga ;?></td>
                        <td><?php echo $row->hari ;?></td>
                        <td><?php echo $row->ronde ;?></td>
                        <td><?php echo $row->kelas ;?></td>
	  		        </tr>
	  		<?php $no++; ?>
	  		<?php endforeach; ?>
	  	</tbody>
	  </table>
	 </div>
</body>
</html>