<!-- BORDERED TABLE -->
<div class="panel">
   <div class="panel-heading">
      <h3 class="panel-title" style="text-align: center">Tabel Data Iklan</h3>
   </div>
   <div class="panel-body">
      <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-success btn-md pull-right" style="margin-bottom: 10px;"><span class="fa fa-plus"></span> Tambah</button>
      <table id="datatable" class="display">
         <thead>
            <tr>
               <th class="col-md-1">No</th>
               <th class="col-md-2">Nama Iklan</th>
               <th class="col-md-3">Gambar</th>
               <th class="col-md-2">Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php 
              $no = 1;
              foreach ($get_iklan as $data) {
                echo '
                  <tr>
                     <td>'.$no++.'</td>
                     <td>'.$data->nama_informasi.'</td>
                     <td><img src="'.base_url().'assets/uploads/iklan/'.$data->gambar.'" style="max-width: 100%; height: auto;"></td>
                     <td>
                        <a href="'.base_url().'assets/uploads/iklan/'.$data->gambar.'" target="_blank" class="btn btn-xs btn-primary">
                           Lihat Gambar
                        </a>
                        <button type="button" data-toggle="modal" onclick="prepare_update_iklan('.$data->id_informasi.')" data-target="#edit_iklan" class="btn btn-xs btn-warning">
                           Edit
                        </button>
                        <button type="button" data-toggle="modal" data-target="#hapus_iklan" onclick="prepare_delete_iklan('.$data->id_informasi.')" class="btn btn-xs btn-danger">
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
             <h4 class="modal-title" id="defaultModalLabel">Tambah Iklan</h4>
         </div>
         <div class="modal-body col-md-12">
            <form method="post" action="<?php echo base_url() ?>iklan/tambah" enctype="multipart/form-data">
              <input type="hidden" name="tipe" value="iklan">
              <div class="form-group col-md-12">
                      <label>Judul Iklan</label>
                        <input type="text" class="form-control" required name="nama_informasi" placeholder="Judul Iklan . . ." />
                </div>
                <div class="form-group col-md-12">
                    <label>Gambar Iklan(*JPG)</label>
                    <input type="file" required class="form-control" name="foto_iklan">
                </div>

                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>

            </form>
         </div>
     </div>
 </div>
</div>

<div class="modal fade" id="edit_iklan" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
     <div class="modal-content col-md-12">
         <div class="modal-header">
             <h4 class="modal-title" id="defaultModalLabel">Ubah Iklan</h4>
         </div>
         <div class="modal-body col-md-12">
            <form method="post" action="<?php echo base_url() ?>iklan/ubah_iklan" enctype="multipart/form-data">
              <input type="hidden" name="id_informasi" id="update_id_informasi_iklan" >
              <div class="form-group col-md-12">
                      <label>Judul Iklan</label>
                        <input type="text" class="form-control" required id="update_nama_informasi_iklan" name="nama_informasi" placeholder="Judul Iklan . . ." />
                </div>
                <div class="form-group col-md-12">
                    <label>Gambar Iklan(*JPG)</label>
                    <input type="file" required class="form-control" name="foto_iklan">
                </div>
                <div class="form-group col-md-12">
                  <img src="" id="update_foto_iklan" style="max-width: 100%; height: auto;">
                </div>
                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>

            </form>
         </div>
     </div>
 </div>
</div>

      <div class="modal fade" id="hapus_iklan" tabindex="-1" role="dialog">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" id="defaultModalLabel">Hapus Iklan</h4>
               </div>
               <div class="modal-body">
                   Apakah Anda Yakin Ingin Menghapus Info Iklan Ini?
                   <center><img src="" id="delete_foto_iklan" style="max-width:75%;height:auto;"></center>
               </div>
               <div class="modal-footer">
                   <a href="" id="delete_id_informasi_iklan" class="btn btn-danger btn-xs">Hapus</a>
                   <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Tutup</button>
               </div>
           </div>
       </div>
      </div> 

      <script>
        document.title = "Clean Laundry | Iklan";        
      </script>


      
<!-- END BORDERED TABLE -->