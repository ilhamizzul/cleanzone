<script type="text/javascript">
	function prepare_delete_marker(id) {
		$.getJSON('<?php echo base_url() ?>multi_marker/get_marker_by_id/' + id, function(data) {
			$('#delete_id_marker').attr('href', '<?php echo base_url() ?>multi_marker/hapus/' + id);
		});
	}

	function prepare_update_marker(id) {
		$('#id_marker').empty();
		$('#alamat').empty();
		$('#nomor_telepon').empty();
		$('#lat').empty();
		$('#lng').empty();

		$.getJSON('<?php echo base_url() ?>multi_marker/get_marker_by_id/' + id, function(json) {
			$('#id_marker').val(json.id);
			$('#alamat').text(json.alamat);
			$('#nomor_telepon').val(json.nomor_telepon);
			$('#lat').val(json.lat);
			$('#lng').val(json.lng);
		});

	}
</script>