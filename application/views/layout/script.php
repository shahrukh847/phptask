<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<!-- ChartJS -->
<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url() ?>assets/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script> -->
<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>

<script>
	//-------------
	//- BAR CHART -
	//-------------
	var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

	var barChartCanvas = $('#barChart').get(0).getContext('2d')
	var barChartData = $.extend(true, {}, areaChartData)
	var temp0 = areaChartData.datasets[0]
	var temp1 = areaChartData.datasets[1]
	barChartData.datasets[0] = temp1
	barChartData.datasets[1] = temp0

	var barChartOptions = {
		responsive              : true,
		maintainAspectRatio     : false,
		datasetFill             : false
	}

	new Chart(barChartCanvas, {
		type: 'bar',
		data: barChartData,
		options: barChartOptions
	})
</script>

<script>
	$(function () {
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
		
		$('#stox_list').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});

	function edit_stox(id)
	{
		
		$(".update").css("display", "block");
		$(".add").css("display", "none");
		$('#form')[0].reset(); // reset form on modals

		$.ajax({
			url : "<?php echo site_url('stox/edit/')?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{
				console.log(data.name);
				$('[name="id"]').val(data.id);
				$('[name="name"]').val(data.name);
				$('#edit_stox').modal('show'); 
				$('.modal-title').text('Edit Stocks');
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});
	}

	function edit_exchange(id)
	{
		//$(".update").css("display", "block");
		//$(".add").css("display", "none");
		$('#form')[0].reset(); // reset form on modals

		$.ajax({
			url : "<?php echo site_url('exchange/edit/')?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{
				console.log(data.name);
				$('[name="id"]').val(data.id);
				$('[name="name"]').val(data.name);
				$('#edit_exchange').modal('show'); 
				$('.modal-title').text('Edit Exchange');
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});
	}

	

	function add_stox()
	{
		$(".update").css("display", "none");
		$(".add").css("display", "block");

		$('#edit_stox').modal('show'); 
		$('.modal-title').text('Add Stocks');
	}
	

	function add_transaction()
	{
		$('#transaction_modal').modal('show'); 
		$('.modal-title').text('Buy/Sell Stocks');
	}

	function saveStox(save_method)
	{
		console.log('hiii')
		$('#btnSave').text('saving...'); //change button text
		$('#btnSave').attr('disabled',true); //set button disable 
		var url;

		if(save_method == 'add') {
			url = "<?php echo site_url('stox/store')?>";
		} else {
			url = "<?php echo site_url('stox/update')?>";
		}

		// ajax adding data to database
		$.ajax({
			url : url,
			type: "POST",
			data: $('#form').serialize(),
			dataType: "JSON",
			success: function(data)
			{
				if(data.status)
				{
					$('#form').modal('hide');
					location.reload();
				}
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled',false); //set button enable 
				
				
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error adding / update data');
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled',false); //set button enable 
				
			}
		});
	}

	function saveExchange(save_method)
	{
		console.log('hiii')
		$('#btnSave').text('saving...'); //change button text
		$('#btnSave').attr('disabled',true); //set button disable 
		var url;

		if(save_method == 'add') {
			url = "<?php echo site_url('exchange/store')?>";
		} else {
			url = "<?php echo site_url('exchange/update')?>";
		}

		// ajax adding data to database
		$.ajax({
			url : url,
			type: "POST",
			data: $('#form').serialize(),
			dataType: "JSON",
			success: function(data)
			{
				if(data.status)
				{
					$('#form').modal('hide');
					location.reload();
				}
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled',false); //set button enable 
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error adding / update data');
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled',false); //set button enable 
				
			}
		});
	}

	function saveTraction()
	{
		$('#btnSaveTransaction').text('saving...');
		$('#btnSaveTransaction').attr('disabled',true);

		var stox_id = $('#stox_id').val();
		var exchange_id = $('#exchange_id').val();
		var transaction_type = $('#transaction_type').val();
		var quantity = $('#quantity').val();

		if (stox_id == '' || exchange_id == '' || transaction_type == '' || quantity == '' || price == '') {
			alert('please enter All details');
			$('#btnSaveTransaction').text('save');
			$('#btnSaveTransaction').attr('disabled',false);
			return false;
		}

		if (transaction_type == 'Sell') {

			url = "<?php echo site_url('transaction/check')?>";
			// ajax for checking stocks 
			$.ajax({
				url : url,
				type: "POST",
				data: $('#transaction_form').serialize(),
				dataType: "JSON",
				success: function(data)
				{
					console.log(data);
					if(data.status == false)
					{
						$('#btnSaveTransaction').text('save'); //change button text
					  $('#btnSaveTransaction').attr('disabled',false); //set button enable
					  alert('you Have only '+data.available_stox+' Stocks for sell only');
					} else {
						url = "<?php echo site_url('transaction/store')?>";
						//alert('sell');
						$.ajax({
							url : url,
							type: "POST",
							data: $('#transaction_form').serialize(),
							dataType: "JSON",
							success: function(data)
							{
								$('#btnSaveTransaction').text('save'); //change button text
								$('#btnSaveTransaction').attr('disabled',false); //set button enable
								if(data.status == true)
								{
									alert('Transation Suessfully Done');
									location.reload();
								} else {
									alert('Something went wrong');
								}
							}
						});

					}
				}
			});
		} else {
			url = "<?php echo site_url('transaction/store')?>";
			$.ajax({
				url : url,
				type: "POST",
				data: $('#transaction_form').serialize(),
				dataType: "JSON",
				success: function(data)
				{
					console.log(data);
					$('#btnSaveTransaction').text('save'); //change button text
					$('#btnSaveTransaction').attr('disabled',false); //set button enable
					if(data.status == true)
					{
						alert('Transation Suessfully Done');
						location.reload();
					} else {
						alert('Something went wrong');
					}
				}
			});
		}
	}

</script>


</body>
</html>