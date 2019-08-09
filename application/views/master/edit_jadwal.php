<div class="box-body">
<form class="form-horizontal" action="<?php echo base_url('master/update_jadwal')?>" method="post" enctype="multipart/form-data" role="form">
    <div class="modal-body">
        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">Nama Guru</label>
            <div class="col-lg-8">
                <input type="hidden" name="id" value="<?php echo $edit->id;?>">
                <select class="form-control" id="id_guru" name="id_guru">
                <option value="<?php echo $edit->id_guru;?>"><?php echo $edit->nama_guru;?></option>
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
                    <option value="<?php echo $edit->id_matapelajaran;?>"><?php echo $edit->nama_mapel;?></option>
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
                        <option value="<?php echo $edit->id_kelas;?>"><?php echo $edit->kelas;?></option>
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
                    <option value="<?php echo $edit->hari;?>"><?php echo $edit->hari;?></option>
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
                    <option value="<?php echo $edit->waktu;?>"><?php echo $edit->waktu;?></option>
                    <option value="jam ke 1">Jam ke 1</option>
                    <option value="jam ke 2">Jam ke 2</option>
                    <option value="jam ke 3">Jam ke 3</option>
                </select>
            </div>
        </div>
        
    </div>
    <div class="modal-footer">
        
        <input type="submit" name="submit" class="btn btn-info" value="Update">
        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
    </div>
</form>
</div>