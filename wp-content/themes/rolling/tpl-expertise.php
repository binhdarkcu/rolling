<section id="expertise" class="kc-elm kc-css-388724 kc_row expertise-section">
   <div class="kc-row-container">
      <div class="kc-wrap-columns">
      	<div class="section-space-padding kc_column kc_col-sm-12">
      		 <div class="section-title">
	      	 	<h2>Expertise</h2>
	      	</div>
	      	<div class="expandExpertiseData expandData kc_col-sm-10">
	      		
	      	</div>
	         <div class=" kc_column kc_col-sm-12">
	            <div class="kc-col-container">
	               <ul>
	               		<?php
					    	$args_about = array(
					    		'post_type'                     => 'expertise',
					            'posts_per_page' =>  -1 ,
							    'order'			 => 'asc'
					    	);
					    	$i=0;
					    	$abouts = get_posts($args_about);
					    	foreach ( $abouts as $about ) {
					    		$i++;
					    		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $about->ID ), 'single-post-thumbnail');
					    		if($i%2==0){
					    ?>
	               		<li>
	               			<a href="javascript:void(0)" class="chooseexpertise" id="<?php echo $about->ID?>">
		               			<h3><?php echo $about->post_title;?></h3>
		               			<img src="<?php echo $image[0]?>"/>
		               		</a>
	               		</li>
	               		<?php } else { ?>
						<li class="old">
							<a href="javascript:void(0)" class="chooseexpertise" id="<?php echo $about->ID?>">
		               			<img src="<?php echo $image[0]?>"/>
		               			<h3><?php echo $about->post_title;?></h3>
		               		</a>
	               		</li>
	               		<?php } } ?>
	               </ul>
	            </div>
	         </div>
	      </div>
	    </div>
   </div>
</section>