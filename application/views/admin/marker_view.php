<!-- BORDERED TABLE -->
<div class="panel">
   <div class="panel-heading">
      <h3 class="panel-title" style="text-align: center">Tabel Data Lokasi</h3>
   </div>
   <div class="panel-body">
      <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-success btn-md pull-right" style="margin-bottom: 10px;"><span class="fa fa-plus"></span> Tambah</button>
      <table id="datatable" class="display">
         <thead>
            <tr>
               <th class="col-md-1">No</th>
               <th class="col-md-3">Alamat</th>
               <th class="col-md-2">Nomor Telepon</th>
               <th class="col-md-2">Latitude</th>
               <th class="col-md-2">Longitude</th>
               <th class="col-md-2">Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php 
              $no = 1;
              foreach ($get_marker as $data) {
                echo '
                  <tr>
                     <td>'.$no++.'</td>
                     <td>'.$data->alamat.'</td>
                     <td>'.$data->nomor_telepon.'</td>
                     <td>'.$data->lat.'</td>
                     <td>'.$data->lng.'</td>
                     <td>
                        <button type="button" data-toggle="modal" onclick="prepare_update_marker('.$data->id.')" data-target="#edit_marker" class="btn btn-xs btn-warning">
                           Edit
                        </button>
                        <button type="button" data-toggle="modal" data-target="#hapus_marker" onclick="prepare_delete_marker('.$data->id.')" class="btn btn-xs btn-danger">
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
             <h4 class="modal-title" id="defaultModalLabel">Tambah Lokasi</h4>
         </div>
         <div class="modal-body col-md-12">
            <form method="post" action="<?php echo base_url() ?>multi_marker/tambah" enctype="multipart/form-data">
                <div class="form-group col-md-12">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="alamat . . ."></textarea>
                </div>
                <div class="form-group col-md-12">
                  <label>Nomor Telepon</label>
                  <input type="number" class="form-control" required name="nomor_telepon" placeholder="Nomor Telepon . . ." />
                </div>
                <div class="form-group col-md-6">
                  <label>Latitude</label>
                  <input type="text" class="form-control" required name="lat" placeholder="Latitude . . ." />
                </div>
                <div class="form-group col-md-6">
                  <label>Longitude</label>
                  <input type="text" class="form-control" required name="lng" placeholder="Longitude . . ." />
                </div>
                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>
            </form>
         </div>
     </div>
 </div>
</div>

<div class="modal fade" id="edit_marker" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
     <div class="modal-content col-md-12">
         <div class="modal-header">
             <h4 class="modal-title" id="defaultModalLabel">Ubah Lokasi Marker</h4>
         </div>
         <div class="modal-body col-md-12">
            <form method="post" action="<?php echo base_url() ?>multi_marker/ubah_marker" enctype="multipart/form-data">
              <input type="hidden" name="id_marker" id="id_marker" >
                <div class="form-group col-md-12">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" placeholder="alamat . . ."></textarea>
                </div>
                <div class="form-group col-md-12">
                  <label>Nomor Telepon</label>
                  <input type="number" class="form-control" id="nomor_telepon" required name="nomor_telepon" placeholder="Nomor Telepon . . ." />
                </div>
                <div class="form-group col-md-6">
                  <label>Latitude</label>
                  <input type="text" class="form-control" id="lat" required name="lat" placeholder="Latitude . . ." />
                </div>
                <div class="form-group col-md-6">
                  <label>Longitude</label>
                  <input type="text" class="form-control" id="lng" required name="lng" placeholder="Longitude . . ." />
                </div>
                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>
            </form>
         </div>
     </div>
 </div>
</div>

      <div class="modal fade" id="hapus_marker" tabindex="-1" role="dialog">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" id="defaultModalLabel">Hapus Marker</h4>
               </div>
               <div class="modal-body">
                   Apakah Anda Yakin Ingin Menghapus Lokasi Ini?
               </div>
               <div class="modal-footer">
                   <a href="" id="delete_id_marker" class="btn btn-danger btn-xs">Hapus</a>
                   <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Tutup</button>
               </div>
           </div>
       </div>
      </div> 
      <script>
        document.title = "Clean Laundry | Marker";        
      </script>


      
<!-- END BORDERED TABLE -->