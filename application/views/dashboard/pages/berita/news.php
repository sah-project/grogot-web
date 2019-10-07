	<section class="page-header dark page-header-xs">
				<div class="container">

					<h1>BLOG</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Berita</a></li>
						<li><a href="#">Agenda</a></li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->

			<!-- -->
			<section>
				<div class="container">
					<div class="row">
						<!-- LEFT -->
						<div class="col-md-3 col-sm-3">
							<!-- INLINE SEARCH -->
							<div class="inline-search clearfix margin-bottom-30">
								<div class="side-nav-head">
									<h4>CATEGORIES</h4>
								</div>
								<ul class="list-group list-group-bordered list-group-noicon uppercase">
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(12)</span> Berita</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(8)</span> Agenda</a></li>
								</ul>
							</div>
							<!-- /INLINE SEARCH -->
							<hr />
						</div>
						<!-- RIGHT -->
						<div class="col-md-9 col-sm-9">
							<?php
								$n=1;
								 foreach ($berita as $berita) :
									?>
							<!-- TIMELINE -->
							<div class="timeline"><!-- .timeline-inverse = right position [left on RTL] -->
								<div class="timeline-hline"><!-- horizontal line --></div>
								<!-- POST ITEM -->
								<div class="blog-post-item">
									<!-- timeline entry -->
									<div class="timeline-entry"><!-- .rounded = entry -->
										
										<div class="timeline-vline">
											
										</div>
									</div>
									<!-- /timeline entry -->
									<!-- carousel -->
									<div class="flexslider" data-arrowNav="false" data-slideshowSpeed="3000">
										<ul class="slides">
											<!-- Slide 1 -->
											<li>
												<a href="#">
													<img class="img-responsive" src="<?php echo base_url('upload/berita/456248-apel-malang.jpg') ?>" width="600" height="399" alt="">
												</a>
											</li>
										</ul>
									</div>
									<!-- /carousel -->
									<h2><a href="blog-single-default.html"><?php echo $berita['judul'] ?></a></h2>
									<ul class="blog-post-info list-inline">
										<li>
											<a href="#">
												<i class="fa fa-clock-o"></i> 
												<span class="font-lato"><?= $berita['tanggal'] ?></span>
											</a>
										</li>
									</ul>

									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

									<a href="<?php echo base_url() . 'berita/berita_agenda/details/' . $berita['id']; ?>" class="btn btn-reveal btn-default">
										<i class="fa fa-plus"></i>
										<span>Selengkapnya</span>
									</a>
								</div>
								<!-- /POST ITEM -->
							</div>
							<!-- /TIMELINE -->
							<?php endforeach ?>




							<!-- PAGINATION -->
							<div class="text-left">
								<!-- Pagination Default -->
								<ul class="pagination nomargin">
								<?php echo $this->pagination->create_links(); ?>
								</ul>
								<!-- /Pagination Default -->
							</div>
							<!-- /PAGINATION -->

						</div>

					</div>


				</div>
			</section>
			<!-- / -->
  