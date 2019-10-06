<div id="topBar">
	<div class="container">
		<!-- right -->
		<ul class="top-links list-inline pull-right">
			<li class="text-welcome hidden-xs">Selamat datang di Website kami, <strong></strong></li>
			<li>
				<a href="<?= base_url('login') ?>"><i class="fa fa-user hidden-xs"></i> LOGIN</a>
			</li>
		</ul>
		<!-- left -->
	</div>
</div>
<!-- /Top Bar -->

<div id="header" class="sticky clearfix">
	<!-- TOP NAV -->
	<header id="topNav">
		<div class="container">
			<!-- Mobile Menu Button -->
			<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
				<i class="fa fa-bars"></i>
			</button>
			<!-- BUTTONS -->
			<ul class="pull-right nav nav-pills nav-second-main">
				<!-- QUICK SHOP CART -->
				<!-- <li class="quick-cart">
					<a class="pull-right" href="#">
						<i class="fa fa-user"></i>
					</a>
				</li> -->
				<!-- /QUICK SHOP CART -->
			</ul>
			<!-- /BUTTONS -->
			<!-- Logo -->
			<a class="logo pull-left" href="<?php echo base_url() ?>">
				<img src="<?= base_url(); ?>dashboard/assets/images/logo_dark.png" alt="" />
			</a>
			<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
				<nav class="nav-main">
					<ul id="topMain" class="nav nav-pills nav-main">
						<li class="active">
							<!-- HOME -->
							<a href="<?= base_url(); ?>">
								HOME
							</a>
						</li>
						<li class="dropdown">
							<!-- PAGES -->
							<a class="dropdown-toggle" href="#">
								PROFILE
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url(); ?>profil/profil-desa">PROFIL DESA</a></li>
								<li><a href="<?= base_url(); ?>profil/struktur-organisasi">STRUKTUR ORGANISASI</a></li>
								<li><a href="<?= base_url(); ?>profil/potensi-desa">POTENSI DESA</a></li>
							</ul>
						</li>
						<li>
							<a href="<?= base_url(); ?>data-desa">DATA DESA</a>
						</li>
						<li class="dropdown">
							<!-- PAGES -->
							<a class="dropdown-toggle" href="#">
								BERITA
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url() ?>berita/berita-agenda">AGENDA & UPDATE BERITA</a></li>
								<li><a href="<?= base_url(); ?>berita/gallery">GALLERY</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<!-- PAGES -->
							<a class="dropdown-toggle" href="#">
								LEMBAGA
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url(); ?>lembaga/rukun-tetangga">RUKUN TETANGGA</a></li>
								<li><a href="<?= base_url(); ?>lembaga/lpmd">LPMD</a></li>
								<li><a href="<?= base_url(); ?>lembaga/bpd">BPD</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<!-- PAGES -->
							<a class="dropdown-toggle" href="#">
								TRANSPARANSI
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url(); ?>transparansi/apbd">APBD</a></li>
								<li><a href="<?= base_url(); ?>transparansi/rkp">RKP</a></li>
								<li><a href="<?= base_url(); ?>transparansi/rpjm">RPJM</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- /Top Nav -->
</div>