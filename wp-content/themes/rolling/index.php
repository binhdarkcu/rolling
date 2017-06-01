<?php get_header()?>
	    <!-- Home & Menu Section End-->
		<div id="content">
			<div class="kc_clfw"></div>
			<input type="hidden" name="ajaxurl" class="ajaxurl" value="<?php echo HOME_URL;?>/wp-admin/admin-ajax.php">
			<?php get_template_part('tpl','banner')?>

			<?php get_template_part('tpl','about')?>
			
			<?php get_template_part('tpl','expertise')?>

			<?php get_template_part('tpl','our-team')?>

			<?php get_template_part('tpl','testimonials')?>
			
			<?php get_template_part('tpl','contact')?>
			
			</div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<!-- Footer Start -->
			<?php get_footer()?>
			<!-- Footer End -->
			<!-- Back to Top Start -->
			<a href="http://www.uipasta.com/wordpress-preview/rolling/#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
			<!-- Back to Top End -->
			<script type="text/javascript" src="assets/js/jquery.form.min.js"></script>
			
			<script type="text/javascript" src="assets/js/plugin.js"></script>
			<script type="text/javascript" src="assets/js/kingcomposer.min.js"></script>
			<script type="text/javascript" src="assets/js/script.js?ver=4.7.5"></script>
