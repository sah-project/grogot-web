
<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = '<?=base_url();?>dashboard/assets/plugins/';</script>
<script type="text/javascript" src="<?=base_url();?>dashboard/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>dashboard/assets/js/scripts.js"></script>
<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="<?=base_url();?>dashboard/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>dashboard/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>dashboard/assets/js/view/demo.revolution_slider.js"></script>
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
