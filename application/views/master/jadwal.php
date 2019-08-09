<a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#add-tb">
     <i class="fa fa-plus"></i>
</a>
<!-- modal add -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-tb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Tambah</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('master/add_jadwal')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Guru</label>
                        <div class="col-lg-8">
                            
                            <select class="form-control" id="id_guru" name="id_guru">
                            <?php foreach($guru as $row){?>
                                <option value="<?php echo $row->id?>"><?php echo $row->kd_guru.' '. $row->nama_guru;?></option>
                            <?php }?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Mata Pelajaran</label>
                        <div class="col-lg-8">
                            
                            <select class="form-control" id="id_matapelajaran" name="id_matapelajaran">
                            <?php foreach($mapel as $row2){?>
                                <option value="<?php echo $row2->id;?>"><?php echo $row2->nama_mapel;?></option>
                            <?php }?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Kelas</label>
                        <div class="col-lg-8">
                            
                                <select class="form-control" id="id_kelas" name="id_kelas">
                                <?php foreach($kelas as $row3){?>
                                    <option value="<?php echo $row3->id;?>"><?php echo $row3->nama_ruangan;?></option>
                                    <?php }?>
                                </select>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Hari</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="hari" name="hari">
                                <option value="Senen">Senen</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Jam</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="waktu" name="waktu">
                                <option value="jam ke 1">Jam ke 1</option>
                                <option value="jam ke 2">Jam ke 2</option>
                                <option value="jam ke 3">Jam ke 3</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="Tambah">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Mata Pelajaran</th>
            <th>Kelas</th>
            <th>Hari</th>
            <th>jam</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($table as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $row->nama_guru ;?></td>
            <td><?php echo $row->nama_mapel ;?></td>
            <td><?php echo $row->kelas ;?></td>
            <td><?php echo $row->hari ;?></td>
            <td><?php echo $row->waktu ;?></td>
            <td>
                <a href="<?php echo base_url('master/edit_jadwal/'.$row->id);?>" class="btn btn-info btn-sm">
                    <i class="glyphicon glyphicon-pencil"></i> 
                </a>

                <a href ="<?php echo base_url('master/hapus_jadwal/'.$row->id);?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus ini ?');">
                    <i class="fa fa-trash"></i> 
                </a>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>