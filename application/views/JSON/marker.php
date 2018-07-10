<script type="text/javascript">
	function prepare_delete_marker(id) {
		$.getJSON('<?php echo base_url() ?>multi_marker/get_marker_by_id/' + id, function(data) {
			$('#delete_id_marker').attr('href', '<?php echo base_url() ?>multi_marker/hapus/' + id);
		});
	}
</script>