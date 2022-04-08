<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3-mb-4 text-gray-800"><marquee><font color="black" face="fantasy">APLIKASI OSIS SMK NU TASIKMALAYA</font></marquee></h2></center>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?php echo $title; ?></h6>
            <button type="button"class="btn btn-dark float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama_Pembina</td>
                        <td>Nama_Ketua</td>
                        <td>Nama_Wakil</td>
                        <td>Masa_Khidmat</td>
                        
                        <td colspan="2">Setting</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($masa_khidmat as $kh) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $kh['nama_pembina']; ?></td>
                            <td><?php echo $kh['nama_ketua']; ?></td>
                            <td><?php echo $kh['nama_wakil']; ?></td>
                            <td><?php echo $kh['masa_khidmat']; ?></td>
                            
                            <td>                               
                                <a href="<?php echo base_url() ?>Home2/edit_data/<?php echo $kh['id_masa_khidmat']; ?>" class="badge badge-info"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url() ?>Home2/hapus_data/<?php echo $kh['id_masa_khidmat']; ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                                <a href="<?php echo base_url()?>Home2/lihat_data/<?php echo $kh['id_masa_khidmat'];?>"class="badge badge-success"><i class="fa fa-eye"></i></a>
                    </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
   
</div>
   <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal untuk tambah data -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('Home2/proses_tambah_data'); ?>">
                <div class="form-group">
                        <label for="nama_pembina" class="col-sm-2 col-form-label">Nama_Pembina</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_pembina">
                        </div>
                    <div class="form-group">
                        <label for="nama_ketua" class="col-sm-2 col-form-label">Nama_ketua</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_ketua">
                        </div>
                    <div class="form-group">
                        <label for="nama_wakil" class="col-sm-2 col-form-label">Nama_Wakil</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_wakil">
                        </div>
                    <div class="form-group">
                        <label for="masa_khidmat" class="col-sm-2 col-form-label">Masa_Khidmat</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="masa_khidmat">
                        </div>
                    <div class="form-group">
                        <label for="nama_ketua" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-info">Tambah</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Akhir modal -->