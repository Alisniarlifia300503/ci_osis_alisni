<div class="container-fluid">

<h3><?php echo $title; ?></h3>
<hr>
<br>
<form method="post" action="<?php echo base_url('Home2/proses_edit_data');?>">
<input type="hidden" name="id_masa_khidmat" value="<?php echo $tbl_masa_khidmat['id_masa_khidmat'];?>">
<div class="form-group">
    <label for="nama_pembina" class="col-sm-2 col-form-label">Nama_pembina</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="nama_pembina" required="" value="<?php echo $tbl_masa_khidmat['nama_pembina']; ?>">
  </div>
  <div class="form-group">
    <label for="nama_ketua" class="col-sm-2 col-form-label">Nama_Ketua</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="nama_ketua" required="" value="<?php echo $tbl_masa_khidmat['nama_ketua']; ?>">
  </div>
  <div class="form-group">
    <label for="nama_wakil" class="col-sm-2 col-form-label">Nama_Wakil</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="nama_wakil" required="" value="<?php echo $tbl_masa_khidmat['nama_wakil']; ?>">
  </div>
  <div class="form-group">
    <label for="masa_khidmat" class="col-sm-2 col-form-label">Masa_khidmat</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="masa_khidmat" required="" value="<?php echo $tbl_masa_khidmat['masa_khidmat']; ?>">
  </div>
  </div>
  <div class="form-group">
    <label for="nama_ketua" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-2">
    <button type="submit" class="btn btn-info">Ubah</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </div>
  </div>
</form>
</div>