//IKLAN
		function prepare_update_iklan(id_informasi) {
		    $('#id_informasi').empty();
		    $('#nama_informasi').empty();
		    $('#foto_iklan').empty();

		  $.getJSON('<?php echo base_url(); ?>index.php/iklan/get_iklan_by_id/' + id_informasi, function(data) {
		    $('#id_informasi').val(data.id_informasi);
		    $('#nama_informasi').val(data.nama_informasi);
		    $('#foto_iklan').attr('src', '<?php echo base_url('assets/uploads/iklan/') ?>'+data.gambar);
		  });
		}


	//PROMOSI
		function prepare_update_promosi(id_informasi) {
		    $('#id_informasi').empty();
		    $('#nama_informasi').empty();
		    $('#foto_promosi').empty();

		  $.getJSON('<?php echo base_url(); ?>index.php/promosi/get_promosi_by_id/' + id_informasi, function(data) {
		    $('#id_informasi').val(data.id_informasi);
		    $('#nama_informasi').val(data.nama_informasi);
		    $('#foto_promosi').attr('src', '<?php echo base_url('assets/uploads/promosi/') ?>'+data.gambar);
		  });
		}

	//GALERI
		function prepare_update_galeri(id_gambar) {
		    $('#id_gambar').empty();
		    $('#deskripsi').empty();
		    $('#sub_deskripsi').empty();
		    $('#foto_galeri').empty();


		  $.getJSON('<?php echo base_url(); ?>index.php/galeri/get_gambar_by_id/' + id_gambar, function(data) {
		    $('#id_gambar').val(data.id_gambar);
		    $('#deskripsi').val(data.deskripsi);
		    $('#sub_deskripsi').val(data.sub_deskripsi);
		    $('#foto_galeri').attr('src', '<?php echo base_url('assets/uploads/galeri/') ?>'+data.gambar);

		  });
		}