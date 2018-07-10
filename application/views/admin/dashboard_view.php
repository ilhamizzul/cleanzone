<div class="panel panel-headline">
						<div class="panel-heading">
							<center>
							<h3 class="panel-title">Welcome to Admin Clean Laundry</h3>
							<p class="panel-subtitle"><?php echo date('d-m-Y'); ?></p>
							</center>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-database"></i></span>
										<p>
											<span class="number"><?php echo $count_order; ?></span>
											<span class="title">Data Order</span>
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number"><?php echo $count_iklan; ?></span>
											<span class="title">Iklan</span>
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number"><?php echo $count_promosi; ?></span>
											<span class="title">Promosi</span>
										</p>
									</div>
								</div>
								<div class="col-md-4 col-md-offset-2">
									<div class="metric">
										<span class="icon"><i class="fa fa-picture-o"></i></span>
										<p>
											<span class="number"><?php echo $count_galeri; ?></span>
											<span class="title">Data Galeri</span>
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-map-marker"></i></span>
										<p>
											<span class="number"><?php echo $count_marker; ?></span>
											<span class="title">Data Multi Lokasi</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>