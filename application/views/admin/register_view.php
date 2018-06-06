<!-- BORDERED TABLE -->
<div class="panel">
   <div class="panel-heading">
      <h3 class="panel-title" style="text-align: center">Tabel Data Registrasi</h3>
   </div>
   <div class="panel-body">
      <table class="table table-bordered">
         <thead>
            <tr>
               <th>No</th>
               <th>Nama User</th>
               <th>Nomor Telepon</th>
               <th>Email</th>
               <th>Alamat</th>
               <th>Status</th>
               <th>Tanggal Registrasi</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>1</td>
               <td>Ilham Izzul</td>
               <td>085335831672</td>
               <td>ilhamizzul@gmail.com</td>
               <td>Kraksaan jdwnsdinfdekw</td>
               <td><span class="label label-warning">Waiting</span></td>
               <td>25 september 2000</td>
               <td>
                <button type="button" data-toggle="modal" data-target="#ubah_status" class="btn btn-xs btn-primary">
                     Ubah Status
                  </button>
                  <button type="button" data-toggle="modal" data-target="#hapus" class="btn btn-xs btn-danger">
                     Hapus
                  </button>
               </td>
            </tr>
         </tbody>
      </table>
   </div>

   <div class="panel-body">
      <table class="table table-bordered">
         <thead>
            <tr>
               <th>No</th>
               <th>Nama User</th>
               <th>Nomor Telepon</th>
               <th>Email</th>
               <th>Alamat</th>
               <th>Status</th>
               <th>Tanggal Registrasi</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>1</td>
               <td>Ilham Izzul</td>
               <td>085335831672</td>
               <td>ilhamizzul@gmail.com</td>
               <td>Kraksaan jdwnsdinfdekw</td>
               <td><span class="label label-primary">Terkonfirmasi</span></td>
               <td>25 september 2000</td>
               <td>
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

<div class="modal fade" id="ubah_status" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h4 class="modal-title" id="defaultModalLabel">Konfirmasi User</h4>
           </div>
           <div class="modal-body">
               Apakah Anda Yakin Ingin Mengkonfirmasi User Ini?
           </div>
           <div class="modal-footer">
               <a href="'.base_url().'index.php/surat_masuk/delete/'.$data->id_surat.'" class="btn btn-primary btn-xs">Konfirmasi</a>
               <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Tutup</button>
           </div>
       </div>
   </div>
</div> 
<!-- END BORDERED TABLE -->