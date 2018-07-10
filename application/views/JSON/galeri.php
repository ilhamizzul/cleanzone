<script type="text/javascript">
	function prepare_update_galeri(id_gambar) {
		    $('#update_id_gambar').empty();
		    $('#update_deskripsi_galeri').empty();
		    $('#update_sub_deskripsi_galeri').empty();
		    $('#update_foto_galeri').empty();


		  $.getJSON('<?php echo base_url(); ?>galeri/get_gambar_by_id/' + id_gambar, function(data) {
		    $('#update_id_gambar').val(data.id_gambar);
		    $('#update_deskripsi_galeri').val(data.deskripsi);
		    $('#update_sub_deskripsi_galeri').val(data.sub_deskripsi);
		    $('#update_foto_galeri').attr('src', '<?php echo base_url('assets/uploads/galeri/') ?>'+data.gambar);

		  });
		}

		function prepare_delete_galeri(id_gambar) {
			$('#delete_foto_galeri').empty();

			$.getJSON('<?php echo base_url() ?>galeri/get_gambar_by_id/' + id_gambar, function (data) {
				$('#delete_foto_galeri').attr('src', '<?php echo base_url('assets/uploads/galeri/') ?>' + data.gambar);
				$('#delete_id_gambar').attr('href', '<?php echo base_url('index.php/galeri/hapus/') ?>' + data.id_gambar);
			})
		}
</script>