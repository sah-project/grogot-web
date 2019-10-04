<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8" />
		<title>HERMAYA - PROJECT</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		
		<!-- Sheader -->
		<?php $this->load->view($sheader) ?>
		<?php $this->load->view($sheader_datatable) ?>
		
		<!-- Sheader -->
	</head>

	<body class="smoothscroll enable-animation">
		<!-- wrapper -->
		<div id="wrapper">
			<!-- Top Bar Menu-->
			<?php $this->load->view($header) ?>
			<!-- Top Bar Menu-->

			<!-- Content -->
			<?php $this->load->view($content) ?>
			<!-- /Content -->

			
		<!-- Footer	 -->
		<?php $this->load->view($footer) ?>
		<!-- /Footer	 -->



		</div>
		<!-- /wrapper -->
		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>
		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->
<!-- JAVASCRIPT FILES -->
<!-- spesial script summernote -->
<!-- Sfooter	 -->
<?php $this->load->view($sfooter) ?>
<?php $this->load->view($sfooter_datatable) ?>
<!--  End Sfooter	 -->
		
	</body>
</html>