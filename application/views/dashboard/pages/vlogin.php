<!-- <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('wrong_login') ?>"></div>
	<h1>TEST LOGIN FORM </h1>
	<form action="<?php echo base_url('syslogin/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>

 -->




		<!-- -->
			<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('wrong_login') ?>"></div>
			<section>
				<div class="container">
					
					<div class="row">

						<!-- LEFT TEXT -->
						<div class="col-md-5 col-md-offset-1">
							
							<h2 class="size-16">IMPORTANT INFORMATION</h2>
							<p class="text-muted">Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
							<p class="text-muted">Sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>

						</div>
						<!-- /LEFT TEXT -->
						<!-- LOGIN -->
						<div class="col-md-4">
						
							<h2 class="size-16">LOGIN</h2>

							<!-- login form -->
							<form method="post" action="<?php echo base_url('syslogin/aksi_login'); ?>" autocomplete="off">
								<div class="clearfix">
									
									<!-- Email -->
									<div class="form-group">
										<input type="text" name="username" class="form-control" placeholder="Username" required="">
									</div>
									
									<!-- Password -->
									<div class="form-group">
										<input type="password" name="password" class="form-control" placeholder="Password" required="">
									</div>
										
								</div>
								
								<div class="row">
									
									<div class="col-md-6 col-sm-6 col-xs-6">
										
										<!-- Inform Tip -->                                        
										<div class="form-tip pt-20">
											<a class="no-text-decoration size-13 margin-top-10 block" href="#">Forgot Password?</a>
										</div>
										
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-6 text-right">

										<button class="btn btn-primary">OK, LOG IN</button>

									</div>
									
								</div>
								
							</form>
							<!-- /login form -->
						</div>
						<!-- /LOGIN -->

					</div>

					
				</div>
			</section>
			<!-- / -->