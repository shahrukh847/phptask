<div class="content-wrapper" style="min-height: 1302.32px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Reprts</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Report</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- BAR CHART -->
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Report Data</h3>
						</div>
						 <div class="card-body">
							 <table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th style="width: 10px">Sr.No</th>
										<th>Stock Name</th>
										<th>Total Buy Quantity </th>
										<th>Total Buy AVG</th>
										<th>Total Sell Quantity </th>
										<th>Total Sell AVG</th>
										<th>Profit</th>
									</tr>
								</thead>
								<tbody>
									<?php if($stox): ?>
										<?php 
										$row_count = 1;
										foreach($stox as $value): ?>
											<tr>
												<td><?php echo $row_count;?>.</td>
												<td><?php echo $value->stox_name; ?></td>
												<td><?php echo $value->total_quantity_buy; ?></td>
												<td><?php echo $value->total_avg_price_Buy; ?></td>
												<td><?php echo $value->total_quantity_sell; ?></td>
												<td><?php echo $value->total_avg_price_sell; ?></td>
												<td><?php echo $value->profit; ?></td>
											</tr>
											<?php $row_count++; ?>
										<?php endforeach; ?>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /.col -->
			</div>
		</div><!-- /.container-fluid -->
	</section>

</div>


