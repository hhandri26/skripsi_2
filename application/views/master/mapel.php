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
            <form class="form-horizontal" action="<?php echo base_url('master/add_mapel')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Kode Mata Pelajaran</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="kd_mapel" name="kd_mapel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Mata Pelajaran</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
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
            <form class="form-horizontal" action="<?php echo base_url('master/edit_mapel')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Kode Mata Pelajaran</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="kd_mapel" name="kd_mapel">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Nama Mata Pelajaran</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
                                <input type="hidden" id="id" name="id">
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
            <form class="form-horizontal" action="<?php echo base_url('master/delete_mapel')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                           <label class="col-lg-4 col-sm-4 control-label">Nama Mata pelajaran</label>
                            <div class="col-lg-8">
                                <input type="hidden" id="id" name="id">
                                <input type="text" name="nama_guru" id="nama_mapel" class="form-control" readonly>
                                
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
            <th>Kode Mata Pelajaran</th>
            <th>Nama Mata Pelajaran</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($table as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $row->kd_mapel;?></td>
            <td><?php echo $row->nama_mapel ;?></td>
            <td>
                <a  href                 ="javascript:;"
                    data-kd_mapel         ="<?php echo $row->kd_mapel ?>"
                    data-nama_mapel       ="<?php echo $row->nama_mapel ?>"
                    data-id              ="<?php echo $row->id ?>"
                    data-toggle          ="modal"
                    data-target          ="#edit-data"
                    class="show-modal btn btn-info btn-sm">
                    <i class="glyphicon glyphicon-pencil"></i> 
                </a>

                <a  href                 ="javascript:;"
                    data-id              ="<?php echo $row->id ?>"
                    data-nama_mapel       ="<?php echo $row->nama_mapel ?>"
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
            modal.find('#kd_mapel').attr("value",div.data('kd_mapel'));
            modal.find('#nama_mapel').attr("value",div.data('nama_mapel'));
            modal.find('#id').attr("value",div.data('id'));
           
        });

         // modal delete data
          $('#delete-data').on('show.bs.modal', function (event) {
            var div     = $(event.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama_mapel').attr("value",div.data('nama_mapel'));
           
           
        });
    });
</script>
