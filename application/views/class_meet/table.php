<div class="box-body">
<form class="form-horizontal" action="<?php echo base_url('admin/prosess_jadwal')?>" method="post" >
    <div class="form-group">
        <label class="col-lg-4 col-sm-4 control-label">Nama Pertandingan</label>
        <div class="col-lg-8">
            <input type="text" name="nama_pertandingan" class="form-control" value="<?php echo $nama_pertandingan;?>"> 
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-4 col-sm-4 control-label">Pilih Kelas Yang Ikut Serta </label>
        <div class="col-lg-8">
            
            
            <select class="form-control" id="select_kelas" name="kelas[]" multiple="multiple" require="">
            <?php foreach($kelas as $row){?>
                <option value="<?php echo $row->nama_ruangan ?>"><?php echo $row->nama_ruangan;?></option>
            <?php }?>
            </select>
            
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-4 col-sm-4 control-label"> Jenis Olahraga </label>
        <div class="col-lg-8">
            <select class="form-control" id="select_kelas" name="jenis_olahraga" >
                <option value="volly">volly</option>
                <option value="basket">basket</option>
                <option value="futsal">futsal</option>
                <option value="karate">karate</option>
                <option value="maraton">maraton</option>
                <option value="renang">renang</option>
            </select>
            
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-4 col-sm-4 control-label"> </label>
        <div class="col-lg-4">
           <input type="submit" name="submit" class="btn btn-warning" value="Lihat Jadwal">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-4 col-sm-4 control-label"> </label>
        <div class="col-lg-4">
           <input type="submit" name="on_input" class="btn btn-info" value="Input">
        </div>
    </div>
    
</form>
</div>


<?php if($prosess=='ok'){?>
    <div class="box-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Pertemuan Ke</th>
                <th>Ronde 1</th>
                <th>Ronde 2</th>
                <th>Ronde 3</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach($schedule AS $round => $games){
                    echo "<tr>";
					echo "<td>Hari Ke : ".($round+1)."</td>";
					foreach($games AS $play){
						echo "<td>". $play["Home"]." - ".$play["Away"]."</td>";
					}
					echo "<tr>";
				}
            ?>
                
                
            </tbody>
        </table>
    </div>
<?php }?>

<script>
$("#select_kelas").select2();
</script>
