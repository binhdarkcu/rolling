<section id="contact" class="kc-elm kc-css-364617 kc_row contact-us section-space-padding">
	   <div class="kc-row-container  kc-container">
	      <div class="kc-wrap-columns">
			  <?php $contactid = get_page_by_path('contact')->ID; $contact = get_post($contactid);
				   $lat = get_field('lat', $contactid);
				   $long = get_field('long', $contactid);
				   $lang = qtrans_getLanguage();
			       $title = qtrans_use($lang, $contact->post_title,false);
				   $content = qtrans_use($lang, $contact->post_content,false);
			  ?>
	         <div class="kc-elm kc-css-373222 kc_col-sm-12 kc_column kc_col-sm-12">
	            <div class="kc-col-container">
	               <div id=" " class="kc-elm kc-css-991158 kc_row kc_row_inner">
	                  <div class="kc-elm kc-css-553947 kc_col-sm-12 kc_column_inner kc_col-sm-12">
	                     <div class="kc_wrapper kc-col-inner-container">
	                        <div class="kc-elm kc-css-92380 kc_text_block">
	                           <div class="section-title">
	                              <h2><?php echo $title;?></h2>
	                              <?php echo $content;?>
	                           </div>
	                        </div>
	                     </div>
	                  </div>
	               </div>



	               <div class="kc-elm kc-css-861596 kc_row kc_row_inner" style="margin-top: 30px;">
	               	  <div class="kc-elm kc-css-624480 kc_col-sm-6">
	               	  	<div style="width: 95%">
							<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $lat;?>, <?php echo $long;?>&amp;key=AIzaSyBK1kevmPKYUm0SuOm2zOzqU0NFIfeBzFw"></iframe>
	               	  	</div>
	               	  </div>

	                  <div class="kc-elm kc-css-624480 kc_col-sm-6">
	                     <div class="kc_wrapper kc-col-inner-container">
	                        <div class="kc-elm kc-css-436491 kc_text_block">
	                           <div role="form" class="wpcf7" id="wpcf7-f17-p16-o1" lang="en-US" dir="ltr">

	                           		<?php echo '<div class="contactform">'.do_shortcode("[wpdevart_forms id=1]");?>


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
