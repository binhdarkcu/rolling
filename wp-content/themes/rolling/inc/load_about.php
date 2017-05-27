<?php


add_action( 'wp_ajax_get_about', 'get_about' );
add_action( 'wp_ajax_nopriv_get_about', 'get_about' );
function get_about() {
 	$id = $_POST['id'];
  /** Made Query */
  	$query_about = get_post($id);
    
	$urlBanner = wp_get_attachment_url( get_post_thumbnail_id($id) );
	
    //echo '$mp3value:'.$mp3value;
	
	?>
    <div class="row">
    	<div class=" kc_column kc_col-sm-3 ">
    		<div class="box-banner">
    			<img src="<?php echo $urlBanner;?>" style="position: relative"/>
    		</div>
    	</div>
    	<div class=" kc_column kc_col-sm-9">
    		<div class="credits_details">
    			<h3><?php echo $query_about->post_title;?></h3>
    			
    			<?php if(!empty($query_about->post_content)){?>
    			<div class="credits_desc noborder" >
    				<?php echo $query_about->post_content;?>
    			</div>
    			<?php }?>
    			<div class="credits_controls">
    				<a href="javascript:void(0);" class="close" onclick="siteMain.closeExpand();"><i class="fa fa-times" aria-hidden="true"></i></a>
    			</div>
    		</div>
    	</div>
    </div>
  <?php			
  exit;
}