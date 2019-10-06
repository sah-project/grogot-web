	<!-- -->
			<section>
				<div class="container">

					<div class="heading-title heading-border">
						<h3>Gallery <span>Desa Kami</span></h3>
						<p class="font-lato size-14">Capture Berbagai Kegiatan Desa Kami</p>
					</div>

					<!-- 
						RELATED CAROUSEL 

						controlls-over		= navigation buttons over the image 
						buttons-autohide 	= navigation buttons visible on mouse hover only

						owl-carousel item paddings
							.owl-padding-0
							.owl-padding-1
							.owl-padding-2
							.owl-padding-3
							.owl-padding-6
							.owl-padding-10
							.owl-padding-15
							.owl-padding-20
					-->
					<div class="text-center">
						<div class="owl-carousel owl-padding-1 nomargin buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": "4", "autoPlay": 3500, "navigation": true, "pagination": false}'>
				<?php  
					if($gallery->num_rows() > 0){  
							foreach($gallery->result() as $row)
							{  ?>

								<!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="<?php echo base_url('upload/gallery/').$row->image ?>" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>
										</span>
									</span>

									<img src="<?php echo base_url('upload/gallery/').$row->image ?>" width="480" height="320"  alt="">
								</figure>

								<div class="item-box-desc">
									<h3><?php echo $row->caption ?></h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#"><?php echo $row->tanggal ?></a></li>
									</ul>
								</div>

							</div>
							<!-- /item -->
						<?php }} ?>


						</div>
					</div>

				</div>
			</section>
			<!-- / -->