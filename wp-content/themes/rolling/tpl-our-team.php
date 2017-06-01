<section id="our-team" class="kc-elm kc-css-388724 kc_row ourteam-section">
   <div class="kc-row-container">
      <div class="kc-wrap-columns">
      	<div class="section-space-padding kc_column kc_col-sm-12">
      		<h2>Our team</h2>
			<div class="expandOurTeamData expandData kc_col-sm-10">
	      		
	      	</div>
                  <?php
                        $args_ourteam = array(
                              'post_type'                     => 'our_team',
                              'posts_per_page' =>  8 ,
                                  'order'              => 'asc'
                        );
                        $ourteams = get_posts($args_ourteam);
                        foreach ( $ourteams as $team ) {
                              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $team->ID ), 'single-post-thumbnail');
                  ?>
      		<div class=" kc_column kc_col-sm-3">
      			<div class="team_member_img">
				<a href="javascript:void(0)" class="chooseourteam" id="<?php echo $team->ID?>">
		               			<img src="<?php echo $image[0]?>"/>
		        </a>
      				
      			</div>
				<a href="javascript:void(0)" class="chooseourteam" id="<?php echo $team->ID?>">
		               			<h5><?php echo $team->post_title;?></h5>
								
								<p><?php echo $team = get_field('office', $team->ID);?></p>
		        </a>
      		</div>
      		<?php }?>
      	</div>
       </div>
    </div>
</section>