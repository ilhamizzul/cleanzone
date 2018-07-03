<!-- BORDERED TABLE -->
<div class="panel">
   <div class="panel-heading">
      <h3 class="panel-title" style="text-align: center">Tabel Data Promosi</h3>
   </div>
   <div class="panel-body">
    <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-success btn-md pull-right" style="margin-bottom: 10px;"><span class="fa fa-plus"></span> Tambah</button>
      <table class="table table-bordered">
         <thead>
            <tr>
               <th class="col-md-1">Deskripsi</th>
               <th class="col-md-2">Sub Deskripsi</th>
               <th class="col-md-3">Gambar</th>
               <th class="col-md-2">Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php 
              foreach ($get_galeri as $data) {
                echo '
                  <tr>
                     <td>'.$data->deskripsi.'</td>
                     <td>'.$data->sub_deskripsi.'</td>
                     <td><img src="'.base_url().'assets/uploads/galeri/'.$data->gambar.'" style="max-width: 100%; height: auto;"></td>
                     <td>
                        <a href="'.base_url().'assets/uploads/galeri/'.$data->gambar.'" target="_blank" class="btn btn-xs btn-primary">
                           Lihat Gambar
                        </a>
                       <button type="button" data-toggle="modal" onclick="" data-target="#edit_promosi" class="btn btn-xs btn-warning">
                           Edit
                        </button>
                        <button type="button" data-toggle="modal" data-target="#hapus_'.$data->id_gambar.'" class="btn btn-xs btn-danger">
                           Hapus
                        </button>
                     </td>
                  </tr>
                ';
              }
            ?>
         </tbody>
      </table>
   </div>
</div>

<div class="modal fade" id="tambah" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
     <div class="modal-content col-md-12">
         <div class="modal-header">
             <h4 class="modal-title" id="defaultModalLabel">Tambah Promosi</h4>
         </div>
         <div class="modal-body col-md-12">
            <form method="post" action="<?php echo base_url() ?>index.php/promosi/tambah" enctype="multipart/form-data">
              <input type="hidden" name="tipe" value="promosi">
              <div class="form-group col-md-12">
                      <label>Judul Promosi</label>
                        <input type="text" class="form-control" required name="nama_informasi" placeholder="Judul Promosi . . ." />
                </div>
                <div class="form-group col-md-12">
                    <label>Gambar Promosi(*JPG)</label>
                    <input type="file" required class="form-control" name="foto_promosi">
                </div>

                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>

            </form>
         </div>
     </div>
 </div>
</div>

<?php 
  foreach ($get_promosi as $data) {
    echo '
      <div class="modal fade" id="hapus_'.$data->id_gambar.'" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="defaultModalLabel">Hapus Promosi</h4>
                 </div>
                 <div class="modal-body">
                     Apakah Anda Yakin Ingin Menghapus Info Promosi Ini?
                     <center><img src="'.base_url().'assets/uploads/promosi/'.$data->gambar.'" style="max-width:75%;height:auto;"></center>
                 </div>
                 <div class="modal-footer">
                     <a href="'.base_url().'index.php/promosi/delete/'.$data->id_informasi.'" class="btn btn-danger btn-xs">hapus</a>
                     <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Tutup</button>
                 </div>
             </div>
         </div>
      </div> 
    ';
  }
?>

<div class="modal fade" id="edit_promosi" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
     <div class="modal-content col-md-12">
         <div class="modal-header">
             <h4 class="modal-title" id="defaultModalLabel">Ubah Promosi</h4>
         </div>
         <div class="modal-body col-md-12">
            <form method="post" action="<?php echo base_url() ?>index.php/promosi/ubah_promosi" enctype="multipart/form-data">
              <input type="hidden" name="id_informasi" id="id_informasi" >
              <div class="form-group col-md-12">
                      <label>Judul Promosi</label>
                        <input type="text" class="form-control" required id="nama_informasi" name="nama_informasi" placeholder="Judul Promosi . . ." />
                </div>
                <div class="form-group col-md-12">
                    <label>Gambar Promosi(*JPG)</label>
                    <input type="file" class="form-control" id="foto_promosi" name="foto_promosi">
                </div>
                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>

            </form>
         </div>
     </div>
 </div>
</div>

      
<!-- END BORDERED TABLE -->