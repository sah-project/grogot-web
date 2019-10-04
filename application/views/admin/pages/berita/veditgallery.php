			<section class="page-header page-header-xs">
				<div class="container">
					<h1>MANAGEMENT BERITA</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#"><?php echo $this->uri->segment(1)?></a></li>
						<li><a href="#"><?php echo $this->uri->segment(2)?></a></li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->
			<!-- -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-2">
							<!-- side navigation -->
							<div class="side-nav">
								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>MANAGEMENT</h4>
								</div>
								<ul class="list-group list-unstyled">
									<li class="list-group-item"><a href="<?php echo base_url() ?>admin/berita/manage-berita">Berita dan Agenda</a></li>
									<li class="list-group-item active"><a href="<?php echo base_url() ?>admin/berita/manage-gallery">Gallery</a></li>
									
								</ul>
							</div>
							<!-- /side navigation -->
						</div>	
						<div class="col-md-10 col-md-10">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#home" data-toggle="tab">Form Edit Gambar</a></li>
										
									</ul>
							
								<div class="tab-content">
									<div class="tab-pane fade in active" id="home">
										<form class="" action="<?php echo base_url('admin/manberita/cberita/upd_gallery/'.$gallery->id);?>" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right">
												<fieldset>													
													 <div class="row">
														<div class="form-group">
															<div class="col-md-6 col-sm-6">
																<label>Judul Berita *</label>
																<input type="text" name="caption" value="<?php echo $gallery->caption ?>" class="form-control required">
															</div>
															<div class="col-md-6 col-sm-6">
																<label>Tanggal Posting *</label>
																<input type="text" name="tanggal" value="<?php echo $gallery->tanggal ?>" class="form-control datepicker required" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>
																	File Attachment
																	<small class="text-muted">Baru</small>
																</label>
																 Silahkan pulih file baru jika ingin mengganti foto sebelumnya 
																<div class="fancy-file-upload fancy-file-primary">
																	<i class="fa fa-upload"></i>
																	<input type="file" class="form-control" name="image" />
																	<input type="text" class="form-control" placeholder="no file selected" readonly="" />
																	<span class="button">Choose File</span>
																</div>
																<small class="text-muted block">satu file Max file size: 1Mb (jpeg/jpg/png)</small>

															</div>
														</div>
													</div>

												</fieldset>

												<div class="row">
													<div class="col-md-12">
														<button type="submit" class="btn btn-3d btn-success btn-xlg btn-block margin-top-30">
															<i class="fa fa-upload"></i>RE-UPLOAD
														</button>
													</div>
												</div>

											</form> 
									</div>
		
								</div>
								
							
					     </div>
					 	</div>
					</div>
				</div>
			</section>
			<!-- / -->

			