<section id="about-us" class="kc-elm kc-css-388724 kc_row about-section">
   <div class="kc-row-container">
      <div class="kc-wrap-columns">
      	<div class="section-space-padding kc_column kc_col-sm-12">
      		 <div class="section-title">
                 <?php
                    $lang = qtrans_getLanguage();
                    if($lang == 'en'){
                 ?>
      	 	       <h2>About Us</h2>
                <?php } else {?>
                    <h2>Về chúng tôi</h2>
                <?php }?>
	      	</div>
	      	<div class="expandAboutData expandData">

	      	</div>

	      	<?php
		    	$args_about = array(
		    		'post_type'                     => 'about_content',
		            'posts_per_page' =>  6 ,
				    'order'			 => 'asc'
		    	);
		    	$abouts = get_posts($args_about);
		    	foreach ( $abouts as $about ) {
		    		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $about->ID ), 'single-post-thumbnail');
		    ?>
	         <div class=" kc_column kc_col-sm-4">
	            <div class="kc-col-container">
	               <div class="kc-elm kc-css-193492 kc_text_block about-me ">
	               		<a href="javascript:void(0)" class="chooselink" id="<?php echo $about->ID;?>"><img src="<?php echo $image[0]?>"/></a>
	               		<h4><?php echo $about->post_title;?> </h4>
	                    <?php echo get_field("short_description", $about->ID);?>
	               </div>
	            </div>
	         </div>

	         <?php } ?>
	      </div>
	    </div>
   </div>
</section>
