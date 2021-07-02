<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<ul class="nav nav-primary">
				<?php if (session()->get('username') == NULL) { ?>
					<li class="nav-item">
						<a href="<?= base_url('testing'); ?>">
							<i class="fas fa-cogs"></i>
							<p>Klasifikasi LVQ</p>
						</a>
					</li>
				<?php } else { ?>
					<li class="nav-item active">
						<a href="/" aria-expanded="false">
							<i class="fas fa-home"></i>
							<p>Beranda</p>
						</a>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Data</h4>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('training'); ?>">
							<i class="fas fa-database"></i>
							<p>Data Training</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('weight'); ?>">
							<i class="fas fa-diagnoses"></i>
							<p>Training</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('testing'); ?>">
							<i class="fas fa-cogs"></i>
							<p>Klasifikasi LVQ</p>
						</a>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Laporan</h4>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('laporan'); ?>">
							<i class="fas fa-file-contract"></i>
							<p>Laporan Hasil</p>
						</a>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Informasi</h4>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('informasi'); ?>">
							<i class="fas fa-exclamation-circle"></i>
							<p>Tentang LVQ</p>
						</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->

<div class="main-panel">