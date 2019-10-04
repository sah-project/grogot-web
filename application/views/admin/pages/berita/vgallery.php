			<section class="page-header page-header-xs">
				<div class="container">
					<h1>MANAGEMENT BERITA</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#"><?php echo $this->uri->segment(2)?></a></li>
						<li><a href="#"><?php echo $this->uri->segment(3)?></a></li>
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
										<li class=""><a href="#home" data-toggle="tab">Upload Gambar</a></li>
										<li class="active"><a href="#profile" data-toggle="tab">Manage Gallery</a></li>
									</ul>
							
								<div class="tab-content">
									<div class="tab-pane fade in" id="home">
										<form class="" action="<?php echo base_url();?>admin/manberita/cberita/simpangallery" method="post" enctype="multipart/form-data" data-toastr-position="top-right">
												<fieldset>
													
													 <div class="row">
														<div class="form-group">
															<div class="col-md-6 col-sm-6">
																<label>Caption *</label>
																<input type="text" name="caption" value="" required="" class="form-control required">
															</div>
															<div class="col-md-6 col-sm-6">
																<label>Tanggal Posting *</label>
																<input type="date" required="" name="tanggal" value="" class="form-control datepicker required" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>
																	File Attachment 
																	<small class="text-muted">Foto Gallery</small>
																</label>
																 custom file upload 
																<div class="fancy-file-upload fancy-file-primary">
																	<i class="fa fa-upload"></i>
																	<input type="file" class="form-control" name="image" />
																	<input type="text" class="form-control" placeholder="no file selected" required="" readonly="" />
																	<span class="button">Choose File</span>
																</div>
																<small class="text-muted block">pilih satu file Max file size: 1Mb (jpeg/jpg/png)</small>

															</div>
														</div>
													</div>

												</fieldset>

												<div class="row">
													<div class="col-md-12">
														<button type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30">
															POSTING FOTO
														</button>
													</div>
												</div>

											</form> 
									</div>
									<div class="tab-pane fade in active" id="profile">
										<table class="table table-striped table-bordered" id="sample_editable_1">

											<thead>
												<tr>
													<th>NO</th>
													<th>Caption</th>
													<th>Tanggal Posting</th>
													<th>Picture</th>
													<th>Status</th>
													<th>Post Action</th>
													<th>Manage</th>
												</tr>
											</thead>
											<tbody>
														<?php  
										               		$n=1;
								           					if($fetch_data->num_rows() > 0)
								           					{  
								                				foreach($fetch_data->result() as $row)
								                				{  ?>
												
												<tr>													
													<td><?php echo $n++ ?></td>
													<td><?php echo $row->caption ?></td>
													<td><?php echo $row->tanggal ?></td>
													<td><img width="60" height="60" alt="" src="<?php echo base_url('upload/gallery/'.$row->image) ?>"></td>
													<td><?php
																if ($row->aktif=='0'){
																	echo "<span class='label label-sm label-success'>Posted</span>";
																}
																else {
																	echo "<span class='label label-sm label-danger'>Nonaktif</span>";
																} 
															?>
													 </td>
													 <td>
													 	<?php 
													 		if ($row->aktif=='0'){
													 	 ?>
													 	
														<a href="<?php echo site_url('/admin/manberita/cberita/edit_gallery/'.$row->id)?>" class="btn btn-xs btn-3d btn-warning"><i class="glyphicon glyphicon-check"></i>Nonaktifkan</a>
													<?php } else {
													 ?>
													 	<a href="<?php echo site_url('/admin/manberita/cberita/edit_gallery/'.$row->id)?>" class="btn btn-xs btn-3d btn-success"><i class="glyphicon glyphicon-check"></i>Actifkan</a>
													 </td>
													<?php } ?>
													<td>
														<a href="<?php echo site_url('/admin/manberita/cberita/edit_gallery/'.$row->id)?>" class="btn btn-xs btn-3d btn-teal"><i class="glyphicon glyphicon-pencil"></i>Edit</a>
														<a onclick="deleteConfirm('<?php echo site_url('admin/manberita/cberita/hps_gallery/'.$row->id) ?>')" class="btn btn-xs btn-3d btn-red"><i class="glyphicon glyphicon-trash"></i>Hapus</a>
														
													</td>
												</tr>
												<?php } } ?>
											
											</tbody>
										</table>
									</div>
								</div>
								
							
					     </div>
					 	</div>
					</div>
				</div>
			</section>
			<!-- / -->

			<!-- MODAL	 -->

				<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Hapus?</h5>
				        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">×</span>
				        </button>
				      </div>
				      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
				      <div class="modal-footer">
				        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
				      </div>
				    </div>
				  </div>
				</div>
			<!-- END MODAL -->
