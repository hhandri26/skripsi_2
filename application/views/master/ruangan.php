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
            <form class="form-horizontal" action="<?php echo base_url('master/add_ruangan')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Kode Ruangan</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="kd_ruangan" name="kd_ruangan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Ruangan</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan">
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
            <form class="form-horizontal" action="<?php echo base_url('master/edit_ruangan')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Kode Guru</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="kd_ruangan" name="kd_ruangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Nama Ruangan</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan">
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
            <form class="form-horizontal" action="<?php echo base_url('master/delete_ruangan')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                           <label class="col-lg-4 col-sm-4 control-label">Nama ruangan</label>
                            <div class="col-lg-8">
                                <input type="hidden" id="id" name="id">
                                <input type="text" name="nama_ruangan" id="nama_ruangan" class="form-control" readonly>
                                
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
            <th>Kode Ruangan</th>
            <th>Nama Ruangan</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($table as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $row->kd_ruangan ;?></td>
            <td><?php echo $row->nama_ruangan ;?></td>
            <td>
                <a  href                 ="javascript:;"
                    data-kd_ruangan         ="<?php echo $row->kd_ruangan?>"
                    data-nama_ruangan       ="<?php echo $row->nama_ruangan ?>"
                    data-id              ="<?php echo $row->id ?>"
                    data-toggle          ="modal"
                    data-target          ="#edit-data"
                    class="show-modal btn btn-info btn-sm">
                    <i class="glyphicon glyphicon-pencil"></i> 
                </a>

                <a  href                 ="javascript:;"
                    data-id              ="<?php echo $row->id ?>"
                    data-nama_ruangan       ="<?php echo $row->nama_ruangan ?>"
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
            modal.find('#kd_ruangan').attr("value",div.data('kd_ruangan'));
            modal.find('#nama_ruangan').attr("value",div.data('nama_ruangan'));
            modal.find('#id').attr("value",div.data('id'));
           
        });

         // modal delete data
          $('#delete-data').on('show.bs.modal', function (event) {
            var div     = $(event.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama_ruangan').attr("value",div.data('nama_ruangan'));
           
           
        });
    });
</script>
