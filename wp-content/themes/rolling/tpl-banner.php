
<?php
    $homeid = get_page_by_path('homepage')->ID;
    $bannerbg = get_field('banner_background', $homeid);
?>
<section style="background: url(<?php echo $bannerbg?>) center center/cover no-repeat scroll;" data-kc-fullheight="middle-content" id="home" data-kc-parallax="true" class="kc-elm kc-css-980232 kc_row home-section">
	<div class="kc-row-container">
		<div class="kc-wrap-columns">
			<div class="kc-elm kc-css-41 kc_col-sm-12 kc_column kc_col-sm-12">
				<div class="kc-col-container">
					<div class="kc-elm kc-css-974155 kc_text_block home-section-background">
						<div class="header-text">
							<div class="type-wrap" style="">
								<div id="typed-strings">
									<p><?php echo get_field('banner_title', $homeid);?></p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="margin-top-60 smoth-scroll arrow-down">
		<a class="fa fa-chevron-down" href="#about-us"></a>
	</div>
</section>