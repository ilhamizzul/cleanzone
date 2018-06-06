<!-- BORDERED TABLE -->
<div class="panel">
   <div class="panel-heading">
      <h3 class="panel-title" style="text-align: center">Tabel Data Promosi</h3>
   </div>
   <div class="panel-body">
      <table class="table table-bordered">
         <thead>
            <tr>
               <th class="col-md-1">No</th>
               <th class="col-md-2">Nama Promosi</th>
               <th class="col-md-4">Deskripsi</th>
               <th class="col-md-3">Gambar</th>
               <th class="col-md-2">Aksi</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>1</td>
               <td>Lorem Ipsum Dolor Sit</td>
               <td>Formats a HTML string/file with your desired indentation level. The formatting rules are not configurable but are already optimized for the best possible output.</td>
               <td><img src="<?php echo base_url() ?>assets/img/banner.png" style="max-width: 200px; height: auto;"></td>
               <td>
                  <a href="" class="btn btn-xs btn-primary">
                     Lihat Gambar
                  </a>
                  <a href="" class="btn btn-xs btn-warning">
                     Edit
                  </a>
                  <button type="button" data-toggle="modal" data-target="#hapus" class="btn btn-xs btn-danger">
                     Hapus
                  </button>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>

<div class="modal fade" id="hapus" tabindex="-1" role="dialog">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h4 class="modal-title" id="defaultModalLabel">Hapus Promosi</h4>
                     </div>
                     <div class="modal-body">
                         Apakah Anda Yakin Ingin Menghapus Info Promosi Ini?
                     </div>
                     <div class="modal-footer">
                         <a href="'.base_url().'index.php/surat_masuk/delete/'.$data->id_surat.'" class="btn btn-danger btn-xs">hapus</a>
                         <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Tutup</button>
                     </div>
                 </div>
             </div>
         </div> 
<!-- END BORDERED TABLE -->