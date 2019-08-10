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
            <form class="form-horizontal" action="<?php echo base_url('master/add_guru')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">NIP Guru</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="kd_guru" name="kd_guru">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Guru</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="nama_guru" name="nama_guru">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Jenis Kelamin</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="nama_guru" name="jenis_kelamin">
                                <option value="L">Laki - laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Mata Pelajaran</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="mapel" name="mapel">
                                <?php foreach ($mapel as $row){;?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->nama_mapel;?></option>
                                <?php };?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Alamat</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Tgl Lahir</label>
                        <div class="col-lg-8">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
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

<!-- modal edit -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Edit</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('master/edit_guru')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Kode Guru</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="kd_guru" name="kd_guru">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Nama Guru</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="nama_guru" name="nama_guru">
                                <input type="hidden" id="id" name="id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-lg-8">
                                <select class="form-control" id="nama_guru" name="jenis_kelamin">
                                    <option value="L">Laki - laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Mata Pelajaran</label>
                            <div class="col-lg-8">
                                <select class="form-control" id="mapel" name="mapel">
                                    <?php foreach ($mapel as $row){;?>
                                        <option value="<?php echo $row->id;?>"><?php echo $row->nama_mapel;?></option>
                                    <?php };?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Alamat</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Tgl Lahir</label>
                            <div class="col-lg-8">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    
                    <input type="submit" name="submit" class="btn btn-info" value="Simpan">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus -->

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="delete-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Anda Yakin Hapus Ini?</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('master/delete_guru')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                           <label class="col-lg-4 col-sm-4 control-label">Nama Guru</label>
                            <div class="col-lg-8">
                                <input type="hidden" id="id" name="id">
                                <input type="text" name="nama_guru" id="nama_guru" class="form-control" readonly>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-danger" value="Hapus">
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
            <th>NIP Guru</th>
            <th>Nama Guru</th>
            <th>Jenis Kelamin</th>
            <th>Mata pelajaran </th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($table as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $row->kd_guru ;?></td>
            <td><?php echo $row->nama_guru ;?></td>
            <td><?php echo $row->jenis_kelamin ;?></td>
            <td><?php echo $row->nama_mapel ;?></td>
            <td>
                <a  href                 ="javascript:;"
                    data-kd_guru         ="<?php echo $row->kd_guru ?>"
                    data-nama_guru       ="<?php echo $row->nama_guru ?>"
                    data-jenis_kelamin   ="<?php echo $row->jenis_kelamin ?>"
                    data-nama_mapel      ="<?php echo $row->nama_mapel ?>"
                    data-mapel           ="<?php echo $row->mapel ?>"
                    data-id              ="<?php echo $row->id ?>"
                    data-tgl_lahir       ="<?php echo $row->tgl_lahir ?>"
                    data-alamat          ="<?php echo $row->alamat ?>"
                    data-toggle          ="modal"
                    data-target          ="#edit-data"
                    class="show-modal btn btn-info btn-sm">
                    <i class="glyphicon glyphicon-pencil"></i> 
                </a>

                <a  href                 ="javascript:;"
                    data-id              ="<?php echo $row->id ?>"
                    data-nama_guru       ="<?php echo $row->nama_guru ?>"
                    data-toggle          ="modal"
                    data-target          ="#delete-data"
                    class="show-modal btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i> 
                </a>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div     = $(event.relatedTarget)
            var modal   = $(this)
            modal.find('#kd_guru').attr("value",div.data('kd_guru'));
            modal.find('#nama_guru').attr("value",div.data('nama_guru'));
            modal.find('#jenis_kelamin').attr("value",div.data('jenis_kelamin'));
            modal.find('#nama_mapel').attr("value",div.data('nama_mapel'));
            modal.find('#mapel').attr("value",div.data('mapel'));
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#alamat').attr("value",div.data('alamat'));
            modal.find('#tgl_lahir').attr("value",div.data('tgl_lahir'));
           
        });

         // modal delete data
          $('#delete-data').on('show.bs.modal', function (event) {
            var div     = $(event.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama_guru').attr("value",div.data('nama_guru'));
           
           
        });
    });
</script>
