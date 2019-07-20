
<!-- add -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-tb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Tambah Mitra</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('artikel_admin/mitra_add')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                      <label for="judul" class="col-form-label">Judul Link</label>
                      <input type="text" class="form-control"  name="nama" required>
                    </div>
                      <div class="form-group">
                      <label for="judul" class="col-form-label">Link</label>
                      <input type="text" class="form-control"  name="link" required>
                    </div>
                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="tambah">
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
                <h4 class="modal-title">Edit Link</h4>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="judul" class="col-form-label">Judul Link</label>
                      <input type="text" class="form-control"  name="nama" required>
                    </div>
                      <div class="form-group">
                      <label for="judul" class="col-form-label">Link</label>
                      <input type="text" class="form-control"  name="link" required>
                    </div>
                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="tambah">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('artikel_admin/edit_status_p');?>" method="post" enctype="multipart/form-data" role="form">
                 
            </form>
        </div>
    </div>
</div>

<!-- END Modal Ubah -->

<!-- Modal Hapus -->

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="delete-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Anda Yakin Hapus ini?</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('artikel_admin/mitra_delete');?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                           <label class="col-lg-2 col-sm-2 control-label">Hapus</label>
                            <div class="col-lg-10">
                                <input type="hidden" id="id" name="id">
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


<!-- end modal hapus -->



<!--Column rendering-->
    <div class="panel panel-light" id="pendaftar">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Link Terkait</h4>
            </div>
        </div>

       
       
        <div class="panel-body">
          <a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#add-tb"><i class="fa fa-plus"></i></a>
            
            <!-- live preview -->
            
           
            <table id="data-table-example1" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Link</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

               <tbody>
                    <?php $no = 1; foreach ($table as $row) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row->nama ?></td>
                            <td><?php echo $row->link ?></td>
                            <td>
                               
                               <a href            ="javascript:;"
                                   data-id          ="<?php echo $row->id;?>"
        
                                   data-toggle      ="modal"
                                   data-target      ="#edit-data"

                                   class="delete-modal btn btn-warning btn-sm">
                                  <i class="fa fa-edit"></i> 
                                </a>

                                <a href            ="javascript:;"
                                   data-id          ="<?php echo $row->id;?>"
                                   
                                   data-toggle      ="modal"
                                   data-target      ="#delete-data"

                                   class="delete-modal btn btn-danger btn-sm">
                                  <i class="fa fa-trash"></i> 
                                </a>

                            </td>

                        </tr>
                    <?php }?>
                    
                    
                </tbody>
            </table>
        </div>
    </div>
    <?php $this->load->view($script_table);?>
<script>
    $(document).ready(function() {
        // edit modal
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal          = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#email').attr("value",div.data('email'));
           
           
        });
        // add
        $('#add-tb').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal          = $(this)
           
        });
         // modal delete data
          $('#delete-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal          = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#gambar').attr("value",div.data('gambar'));
           
           
        });
    });
</script>
<script>
    function readURL(input) { // live preview IMG
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-pre').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-id").change(function(){
        readURL(this);
    });
    
</script>



  