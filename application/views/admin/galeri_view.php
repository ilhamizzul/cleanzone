<!-- BORDERED TABLE -->
<div class="panel">
   <div class="panel-heading">
      <h3 class="panel-title" style="text-align: center">Tabel Galeri Foto</h3>
   </div>
   <div class="panel-body">
    <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-success btn-md pull-right" style="margin-bottom: 10px;"><span class="fa fa-plus"></span> Tambah</button>
      <table id="datatable" class="display">
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
                       <button type="button" data-toggle="modal" onclick="prepare_update_galeri('.$data->id_gambar.')" data-target="#edit_gambar" class="btn btn-xs btn-warning">
                           Edit
                        </button>
                        <button type="button" data-toggle="modal" data-target="#hapus_galeri" onclick="prepare_delete_galeri('.$data->id_gambar.')" class="btn btn-xs btn-danger">
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
             <h4 class="modal-title" id="defaultModalLabel">Tambah Galeri Foto</h4>
         </div>
         <div class="modal-body col-md-12">
            <form method="post" action="<?php echo base_url() ?>galeri/tambah" enctype="multipart/form-data">
              <div class="form-group col-md-12">
                      <label>Deskripsi Gambar</label>
                        <input type="text" class="form-control" required name="deskripsi" placeholder="Deskripsi Gambar . . ." />
                </div>
                <div class="form-group col-md-12">
                      <label>Sub Deskripsi Gambar</label>
                        <input type="text" class="form-control" required name="sub_deskripsi" placeholder="Sub Deskripsi . . ." />
                </div>
                <div class="form-group col-md-12">
                    <label>Gambar(*JPG)</label>
                    <input type="file" required class="form-control" name="foto">
                </div>

                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>

            </form>
         </div>
     </div>
 </div>
</div>

<div class="modal fade" id="hapus_galeri" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h4 class="modal-title" id="defaultModalLabel">Hapus Promosi</h4>
           </div>
           <div class="modal-body">
               Apakah Anda Yakin Ingin Menghapus Info Promosi Ini?
               <center><img src="" id="delete_foto_galeri" style="max-width:75%;height:auto;"></center>
           </div>
           <div class="modal-footer">
               <a href="" id="delete_id_gambar" class="btn btn-danger btn-xs">hapus</a>
               <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Tutup</button>
           </div>
       </div>
   </div>
</div> 

<div class="modal fade" id="edit_gambar" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
     <div class="modal-content col-md-12">
         <div class="modal-header">
             <h4 class="modal-title" id="defaultModalLabel">Ubah Gambar</h4>
         </div>
         <div class="modal-body col-md-12">
            <form method="post" action="<?php echo base_url() ?>galeri/ubah_gambar" enctype="multipart/form-data">
              <input type="hidden" name="id_gambar" id="update_id_gambar" >
              <div class="form-group col-md-12">
                      <label>Deskripsi Gambar</label>
                        <input type="text" class="form-control" required id="update_deskripsi_galeri" name="deskripsi" placeholder="Deskripsi Gambar . . ." />
                </div>
                <div class="form-group col-md-12">
                      <label>Sub Deskripsi Gambar</label>
                        <input type="text" class="form-control" required id="update_sub_deskripsi_galeri" name="sub_deskripsi" placeholder="Sub Deskripsi . . ." />
                </div>
                <div class="form-group col-md-12">
                    <label>Gambar(*JPG)</label>
                    <input type="file" class="form-control" name="foto">
                </div>
                <div class="form-group col-md-12">
                  <img src="" id="update_foto_galeri" style="max-width: 100%; height: auto;">
                </div>
                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>

            </form>
         </div>
     </div>
 </div>
</div>

      <script>
        document.title = "Clean Laundry | Galeri";        
      </script>

      
<!-- END BORDERED TABLE -->