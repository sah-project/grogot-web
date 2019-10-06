<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-md-12 col-sm-12">

							<h1 class="blog-post-title"><?php echo $berita->judul ?></h1>
							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i> 
										<span class="font-lato"><?php echo $berita->tanggal; ?></span>
									</a>
								</li>
							</ul>

							<!-- OWL SLIDER -->
							<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 4500, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
								<a class="lightbox" href="<?php echo base_url('upload/berita/').$berita->image ?>" data-plugin-options='{"type":"image"}'>
									<img class="img-responsive" src="<?php echo base_url('upload/berita/').$berita->image ?>" alt="" />
								</a>
							</div>
							<?php echo $berita->konten ?>
							<div class="divider divider-dotted"><!-- divider --></div>
							<ul class="pager">
								<li class="next"><a class="noborder" href="<?php echo base_url('berita/berita-agenda') ?>">Kembali Ke list Berita Lain &rarr;</a></li>
							</ul>
							<div class="divider"><!-- divider --></div>
						</div>

					</div>


				</div>
</section>
			<!-- / -->
