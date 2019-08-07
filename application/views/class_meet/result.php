<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama pertandingan</th>
            <th>Hari</th>
            <th>Ronde</th>
            <th>Kelas </th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($table as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $row->nama_pertandingan ;?></td>
            <td><?php echo $row->hari ;?></td>
            <td><?php echo $row->ronde ;?></td>
            <td><?php echo $row->kelas ;?></td>
            <td>

                <a  href                    ="javascript:;"
                    data-id                 ="<?php echo $row->id ?>"
                    data-toggle             ="modal"
                    data-target             ="#delete-data"
                    class="show-modal btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i> 
                </a>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>