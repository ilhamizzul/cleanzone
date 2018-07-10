<script type="text/javascript">
	function prepare_update_iklan(id_informasi) {
	    $('#update_id_informasi_iklan').empty();
	    $('#update_nama_informasi_iklan').empty();
	    $('#update_foto_iklan').empty();

	  $.getJSON('<?php echo base_url(); ?>iklan/get_iklan_by_id/' + id_informasi, function(data) {
	    $('#update_id_informasi_iklan').val(data.id_informasi);
	    $('#update_nama_informasi_iklan').val(data.nama_informasi);
	    $('#update_foto_iklan').attr('src', '<?php echo base_url('assets/uploads/iklan/') ?>'+data.gambar);
	  });
	}

	function prepare_delete_iklan(id_informasi) {
		$('#delete_foto_iklan').empty();

		$.getJSON('<?php echo base_url() ?>iklan/get_iklan_by_id/' + id_informasi, function(data) {
			$('#delete_id_informasi_iklan').attr('href', '<?php echo base_url('index.php/iklan/delete/') ?>'+data.id_informasi);
			$('#delete_foto_iklan').attr('src', '<?php echo base_url('assets/uploads/iklan/') ?>'+data.gambar);
		});
	}
</script>