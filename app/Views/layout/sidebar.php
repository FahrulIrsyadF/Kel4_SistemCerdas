<?php $request = \Config\Services::request() ?>
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<ul class="nav nav-primary">
				<?php if (session()->get('username') == NULL) { ?>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Beranda</h4>
					</li>
					<li class="nav-item <?= ($request->uri->getSegment(1) == 'informasi') ? 'active' : '' ?>">
						<a href="<?= base_url('informasi'); ?>">
							<i class="fas fa-home"></i>
							<p>Beranda</p>
						</a>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Klasifikasi</h4>
					</li>
					<li class="nav-item <?= ($request->uri->getSegment(1) == 'testing') ? 'active' : '' ?>">
						<a href="<?= base_url('testing'); ?>">
							<i class="fas fa-cogs"></i>
							<p>Klasifikasi LVQ</p>
						</a>
					</li>
				<?php } else { ?>
					<li class="nav-item <?= ($request->uri->getSegment(1) == 'dashboard') ? 'active' : '' ?>">
						<a href="<?= base_url('dashboard'); ?>" aria-expanded="false">
							<i class="fas fa-home"></i>
							<p>Beranda</p>
						</a>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Admin</h4>
					</li>
					<li class="nav-item <?= ($request->uri->getSegment(1) == 'user') ? 'active' : '' ?>">
						<a href="<?= base_url('user'); ?>">
							<i class="fas fa-user-cog"></i>
							<p>Manajemen Admin</p>
						</a>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Klasifikasi</h4>
					</li>
					<li class="nav-item <?= ($request->uri->getSegment(1) == 'training') ? 'active' : '' ?>">
						<a href="<?= base_url('training'); ?>">
							<i class="fas fa-database"></i>
							<p>Data Latih</p>
						</a>
					</li>
					<li class="nav-item <?= ($request->uri->getSegment(1) == 'weight') ? 'active' : '' ?>">
						<a href="<?= base_url('weight'); ?>">
							<i class="fas fa-diagnoses"></i>
							<p>Data Bobot</p>
						</a>
					</li>
					<li class="nav-item <?= ($request->uri->getSegment(1) == 'testing') ? 'active' : '' ?>">
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
					<li class="nav-item <?= ($request->uri->getSegment(1) == 'laporan') ? 'active' : '' ?>">
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
					<li class="nav-item <?= ($request->uri->getSegment(1) == 'informasi') ? 'active' : '' ?>">
						<a href="<?= base_url('informasi'); ?>">
							<i class="fas fa-exclamation-circle"></i>
							<p>Tentang LVQ</p>
						</a>
					</li>
					<li id="logout" class="nav-item <?= ($request->uri->getSegment(1) == 'logout') ? 'active' : '' ?>">
						<a>
							<i class="fa fa-sign-out-alt"></i>
							<p>Keluar</p>
						</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->

<div class="main-panel">