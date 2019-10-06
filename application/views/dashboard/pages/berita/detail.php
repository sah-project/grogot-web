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
							


							<!-- article content -->
							<p class="dropcap">Aliquam fringilla, sapien eget scelerisque placerat, lorem libero cursus lorem, sed sodales lorem libero eu sapien. Nunc mattis feugiat justo vel faucibus. Nulla consequat feugiat malesuada. Ut justo nulla, <strong>facilisis vel molestie id</strong>, dictum ut arcu. Nunc ipsum nulla, eleifend non blandit quis, luctus quis orci. Cras blandit turpis mattis nulla ultrices interdum. Mauris pretium pretium dictum. Nunc commodo, felis sed dictum bibendum, risus justo iaculis dui, nec euismod orci sem eget neque. Donec in metus metus, vitae eleifend lorem. Ut vestibulum gravida venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque suscipit tincidunt magna non mollis. Fusce tempus tincidunt nisi, in luctus elit pellentesque quis. Sed velit mi, ullamcorper ut tempor ut, mattis eu lacus. Morbi rhoncus aliquet tellus, id accumsan enim sollicitudin vitae.</p>
							<p>Vivamus <a href="#">magna justo</a>, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt.</p>
							
							<!-- BLOCKQUOTE -->
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								<cite>Source Title</cite>
							</blockquote>

							<p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
							<p>Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<!-- /article content -->


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
