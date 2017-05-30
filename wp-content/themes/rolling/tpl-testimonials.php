<section id="testimonials" class="kc-elm kc-css-594115 kc_row testimonial-section section-space-padding">
	   <div class="kc-row-container  kc-container">
	      <div class="kc-wrap-columns">
	         <div class="kc-elm kc-css-645296 kc_col-sm-12 kc_column kc_col-sm-12">
	            <div class="kc-col-container">
	               <div id=" " class="kc-elm kc-css-768373 kc_row kc_row_inner">
	                  <div class="kc-elm kc-css-965197 kc_col-sm-12 kc_column_inner kc_col-sm-12">
	                     <div class="kc_wrapper kc-col-inner-container">
	                        <div class="kc-elm kc-css-83048 kc_text_block">
	                           <div class="section-title">
	                              <h2>Testimonials.</h2>
	                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	                           </div>
	                        </div>
	                     </div>
	                  </div>
	               </div>
	               <div id=" " class="kc-elm kc-css-213599 kc_row kc_row_inner">
	                  <div class="kc-elm kc-css-784468 kc_col-sm-12 kc_column_inner kc_col-sm-12">
	                     <div class="kc_wrapper kc-col-inner-container">
	                        <div class="kc-elm kc-css-727077 kc_text_block">
	                           <div class="testimonial-carousel-list">
	                                <?php
								    	$args_testimonial = array(
								    		'post_type'                     => 'testimonial',
								            'posts_per_page' =>  6 ,
										    'order'			 => 'asc'
								    	);
								    	$testimonials = get_posts($args_testimonial);
								    	foreach ( $testimonials as $testimonial ) {
								    		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $testimonial->ID ), 'single-post-thumbnail');
								    ?>
	                                <div class="owl-item" style="width: 1080px;">
                                       <div class="testimonial-word text-center">
                                          <p><img class="alignnone size-full img-responsive" src="<?php echo $image[0];?>" alt="" width="182" height="182"></p>
                                          <h2><?php echo $testimonial->post_title?></h2>
                                          <?php echo $testimonial->post_content?>
                                       </div>
                                    </div>
                                    <?php } ?>
	                           </div>
	                        </div>
	                     </div>
	                  </div>
	               </div>
	            </div>
	         </div>
	      </div>
	   </div>
	</section>