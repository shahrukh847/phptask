<div class="content-wrapper" style="min-height: 1302.32px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>stocks</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Transactions</li>
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
					<div class="card">
						<div class="card-header">
							<a href="#" onclick="add_transaction()" class="btn btn-primary">Add new transaction</a>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							 <table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th style="width: 10px">Sr.No</th>
										<th>Transaction Type</th>
										<th>Stock Name</th>
										<th>Quantity </th>
										<th>Exchange</th>
										<th>Avg Price</th>
									</tr>
								</thead>
								<tbody>
									<?php if($transactions): ?>
										<?php 
										$row_count = 1;
										foreach($transactions as $transaction): ?>
											<tr>
												<td><?php echo $row_count;?>.</td>
												<td><?php echo $transaction->transaction_type; ?></td>
												<td><?php echo $transaction->stox_name; ?></td>
												<td><?php echo $transaction->quantity; ?></td>
												<td><?php echo $transaction->exchange_name; ?></td>
												<td><?php echo $transaction->avg_price; ?></td>
											</tr>
											<?php $row_count++; ?>
										<?php endforeach; ?>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
						
					</div>
					<!-- /.card -->

				</div>
				<!-- /.col -->
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<div class="modal" id="transaction_modal" aria-modal="true" role="dialog" style="padding-right: 15px; ">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit Stock</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" id="transaction_form" class="form-horizontal">
						<div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">Select Stock</label>
									<select name="stox_id" id="stox_id" class="form-control" required>
									<option value="">--Select--</option>
									<?php foreach($stocks as $stock): ?>
									 <option value="<?php echo $stock->id ?>"><?php echo $stock->name ?></option>
									<?php endforeach; ?>
									</select>
									<span class="help-block"></span>
								</div>
								<div class="col-md-6">
									<label class="control-label">Select Exchange</label>
									<select name="exchange_id" id="exchange_id" class="form-control" required>
									<option value="">--Select--</option>
									<?php foreach($exchanges as $exchange): ?>
									 <option value="<?php echo $exchange->id ?>"><?php echo $exchange->name ?></option>
									<?php endforeach; ?>
									</select>
									<span class="help-block"></span>
								</div>
								<div class="col-md-6" style="margin-top: 10px;">
									<label class="control-label">Transaction Type</label>
									<select name="transaction_type" id="transaction_type" class="form-control" required>
									<option value="">--Select--</option>
									 <option value="Buy">Buy</option>
									 <option value="Sell">Sell</option>
									</select>
									<span class="help-block"></span>
								</div>
								<div class="col-md-6" style="margin-top: 10px;">
									<label class="control-label">Quantity</label>
									<input type="number" name="quantity" id="quantity" class="form-control" required>
									<span class="help-block"></span>
								</div>
								<div class="col-md-6" style="margin-top: 10px;">
									<label class="control-label">Price</label>
									<input type="number" name="price" id="price" class="form-control" required>
									<span class="help-block"></span>
								</div>
							</div>


						</div>
					</form>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" id="btnSaveTransaction" onclick="saveTraction()" class="btn btn-primary">Save</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.content -->
</div>


