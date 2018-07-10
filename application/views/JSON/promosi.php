<script type="text/javascript">
	function prepare_update_promosi(id_informasi) {
		    $('#update_id_informasi_promosi').empty();
		    $('#update_nama_informasi_promosi').empty();
		    $('#update_foto_promosi').empty();

		  $.getJSON('<?php echo base_url(); ?>promosi/get_promosi_by_id/' + id_informasi, function(data) {
		    $('#update_id_informasi_promosi').val(data.id_informasi);
		    $('#update_nama_informasi_promosi').val(data.nama_informasi);
		    $('#update_foto_promosi').attr('src', '<?php echo base_url('assets/uploads/promosi/') ?>'+data.gambar);
		  });
		}

		

		function prepare_delete_promosi(id_informasi) {
			$('#delete_foto_promosi').empty();

			$.getJSON('<?php echo base_url() ?>promosi/get_promosi_by_id/' + id_informasi, function(data) {
				$('#delete_id_informasi_promosi').attr('href', '<?php echo base_url('index.php/promosi/delete/') ?>'+data.id_informasi);
				$('#delete_foto_promosi').attr('src', '<?php echo base_url('assets/uploads/promosi/') ?>'+data.gambar);
			});
		}
</script>