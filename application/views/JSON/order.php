<script type="text/javascript">
	function update_status_menunggu(id_order) {
			$('.invoice').empty();
			$('#status_update').empty();

			$.getJSON('<?php echo base_url() ?>order/get_order_by_id/' + id_order, function(data) {
				$('#status_update').text('Dijemput');
				$('.invoice').text(data.invoice_order);
				$('#ubah_status').attr('href', '<?php echo base_url() ?>order/ubah_status_menunggu/'+data.id_order);
			});
		}

		function update_status_dijemput(id_order) {
			$('.invoice').empty();
			$('#status_update').empty();

			$.getJSON('<?php echo base_url() ?>order/get_order_by_id/' + id_order, function(data) {
				$('#status_update').text('Proses');
				$('.invoice').text(data.invoice_order);
				$('#ubah_status').attr('href', '<?php echo base_url() ?>order/ubah_status_dijemput/'+data.id_order);
			});
		}

		function update_status_proses(id_order) {
			$('.invoice').empty();
			$('#status_update').empty();

			$.getJSON('<?php echo base_url() ?>order/get_order_by_id/' + id_order, function(data) {
				$('#status_update').text('Diantar');
				$('.invoice').text(data.invoice_order);
				$('#ubah_status').attr('href', '<?php echo base_url() ?>order/ubah_status_proses/'+data.id_order);
			});
		}

		function update_status_diantar(id_order) {
			$('.invoice').empty();
			$('#status_update').empty();

			$.getJSON('<?php echo base_url() ?>order/get_order_by_id/' + id_order, function(data) {
				$('#status_update').text('Selesai');
				$('.invoice').text(data.invoice_order);
				$('#ubah_status').attr('href', '<?php echo base_url() ?>order/ubah_status_diantar/'+data.id_order);
			});
		}

		function prepare_update_order(id_order) {
			$('#id_order').empty();
			$('#invoice_order').empty();
			$('#alamat').empty();
			$('#cash').empty();
			$('#total').empty();
			$('.invoice').empty();

			$.getJSON('<?php echo base_url() ?>order/get_order_by_id/' + id_order, function(data) {
				$('#id_order').val(data.id_order);
				$('#invoice_order').val(data.invoice_order);
				$('#alamat').text(data.alamat);
				$('#cash').val(data.cash);
				$('#total').val(data.total);
				$('.invoice').text(data.invoice_order);
			});
		}

		function prepare_delete_order(id_order) {
			$('.invoice').empty();

			$.getJSON('<?php echo base_url() ?>order/get_order_by_id/' + id_order, function(data) {
				$('.invoice').text(data.invoice_order);
				$('#delete_order').attr('href', '<?php echo base_url() ?>order/delete/'+data.id_order);

			});
		}
</script>