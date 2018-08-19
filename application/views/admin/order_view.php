<!-- BORDERED TABLE -->
<div class="panel">
   <div class="panel-heading">
      <h3 class="panel-title" style="text-align: center">Tabel Data Order</h3>
   </div>
   <div class="panel-body">
      <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-success btn-md pull-right" style="margin-bottom: 10px;"><span class="fa fa-plus"></span> Tambah</button>
      <table id="datatable" class="display">
         <thead>
            <tr>
               <th class="col-md-2">Invoice Order</th>
               <th class="col-md-3">Alamat</th>
               <th class="col-md-2">Cash</th>
               <th class="col-md-1">Total</th>
               <th class="col-md-1">Status</th>
               <th class="col-md-3">Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php 
              foreach ($get_order as $data) {
                echo '
                  <tr>
                     <td>'.$data->invoice_order.'</td>
                     <td>'.$data->alamat.'</td>
                     <td>'.$data->cash.'</td>
                     <td>'.$data->total.'</td>
                     <td>'; //menunggu, dijemput, proses, diantar, selesai
                     if ($data->status == 'menunggu') {
                       echo '<span class="label label-default">'.$data->status.'</span>';
                     } elseif ($data->status == 'dijemput') {
                       echo '<span class="label label-warning">'.$data->status.'</span>';
                     } elseif ($data->status == 'proses') {
                       echo '<span class="label label-primary">'.$data->status.'</span>';
                     } elseif ($data->status == 'diantar') {
                       echo '<span class="label label-info">'.$data->status.'</span>';
                     } else {
                        echo '<span class="label label-success">'.$data->status.'</span>';
                     }
                     echo '</td>
                     <td>';
                     if ($data->status != 'selesai') {
                       echo '
                        <button type="button" data-toggle="modal" onclick="';
                        if ($data->status == 'menunggu') {
                           echo 'update_status_menunggu('.$data->id_order.')';
                         } elseif ($data->status == 'dijemput') {
                           echo 'update_status_dijemput('.$data->id_order.')';
                         } elseif ($data->status == 'proses') {
                           echo 'update_status_proses('.$data->id_order.')';
                         } elseif ($data->status == 'diantar') {
                           echo 'update_status_diantar('.$data->id_order.')';
                         }
                        echo '" data-target="#edit_status" class="btn btn-xs btn-primary">
                           Ubah Status
                        </button>
                       ';
                     }
                     echo '
                        <button type="button" data-toggle="modal" onclick="prepare_update_order('.$data->id_order.')" data-target="#edit_order" class="btn btn-xs btn-warning">
                           Edit
                        </button>
                        <button type="button" data-toggle="modal" data-target="#hapus_order" onclick="prepare_delete_order('.$data->id_order.')" class="btn btn-xs btn-danger">
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
             <h4 class="modal-title" id="defaultModalLabel">Tambah Order</h4>
         </div>
         <div class="modal-body col-md-12">
            <form method="post" action="<?php echo base_url() ?>order/tambah" enctype="multipart/form-data">
              <input type="hidden" name="status" value="menunggu">
                <div class="form-group col-md-12">
                      <label>Invoice Order</label>
                        <input type="text" class="form-control" required name="invoice_order" placeholder="Invoice order . . ." />
                </div>
                <div class="form-group col-md-12">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"></textarea>
                </div>
                <div class="form-group col-md-12">
                      <label>Cash</label>
                        <input type="number" class="form-control" required name="cash" placeholder="Total Harga . . ." />
                </div>
                <div class="form-group col-md-12">
                      <label>Total Barang</label>
                        <input type="text" class="form-control" required name="total" placeholder="Total Barang . . ." />
                </div>
                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>

            </form>
         </div>
     </div>
 </div>
</div>

<div class="modal fade" id="edit_order" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
     <div class="modal-content col-md-12">
         <div class="modal-header">
             <h4 class="modal-title" id="defaultModalLabel">Edit Order <b class="invoice">lala</b></h4>
         </div>
         <div class="modal-body col-md-12">
            <form method="post" action="<?php echo base_url() ?>order/ubah_order" enctype="multipart/form-data">
              <input type="hidden" id="id_order" name="id_order">
              <div class="form-group col-md-12">
                    <label>Invoice Order</label>
                      <input type="text" class="form-control" required id="invoice_order" name="invoice_order" placeholder="Invoice order . . ." />
              </div>
              <div class="form-group col-md-12">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat"></textarea>
              </div>
              <div class="form-group col-md-12">
                    <label>Cash</label>
                      <input type="number" class="form-control" required name="cash" id="cash" placeholder="Total Harga . . ." />
              </div>
              <div class="form-group col-md-12">
                    <label>Total Barang</label>
                      <input type="text" class="form-control" required name="total" id="total" placeholder="Total Barang . . ." />
              </div>
              <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
              <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>

            </form>
         </div>
     </div>
 </div>
</div>

<div class="modal fade" id="hapus_order" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h4 class="modal-title" id="defaultModalLabel">Hapus Order <b class="invoice">lala</b></h4>
         </div>
         <div class="modal-body">
             Apakah Anda Yakin Ingin Menghapus Data Order Dengan Invoice <b class="invoice">lala</b> Ini?
         </div>
         <div class="modal-footer">
             <a href="" id="delete_order" class="btn btn-danger btn-xs">Hapus</a>
             <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Tutup</button>
         </div>
     </div>
 </div>
</div> 

<div class="modal fade" id="edit_status" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title" id="defaultModalLabel">Update Status Order <b class="invoice">lalala</b></h4>
                  </div>
                  <div class="modal-body">
                      Ubah Status Order <b class="invoice">lala</b> Ke Status <b id="status_update">lala</b>? <br><br>
                  </div>
                  <div class="modal-footer">
                      <a href="" id="ubah_status" class="btn btn-primary btn-xs">Ubah</a>
                      <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Tutup</button>
                  </div>
              </div>
          </div>
      </div> 

      <script>
        document.title = "Clean Laundry | Order";        
      </script>


      
<!-- END BORDERED TABLE -->