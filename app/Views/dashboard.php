<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
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