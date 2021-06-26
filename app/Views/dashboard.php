<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
	<!-- <div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Dashboard <?= $nama['nama_user']; ?></h2>
					<h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
				</div>
				<div class="ml-md-auto py-2 py-md-0">
					<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
					<a href="#" class="btn btn-secondary btn-round">Add Customer</a>
				</div>
			</div>
		</div>
	</div> -->
	<div class="page-inner">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title font-weight-bold text-center">Bagan Jumlah User yang Testing berdasar Umur</div>
					</div>
					<div class="card-body">
						<div class="chart-container">
							<canvas id="barChart"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title font-weight-bold text-center">Bagan Presentase Kasus dari User</div>
					</div>
					<div class="card-body">
						<div class="chart-container">
							<canvas id="pieChart" style="width: 50%; height: 50%"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>