<?php


add_action( 'wp_ajax_get_about', 'get_about' );
add_action( 'wp_ajax_nopriv_get_about', 'get_about' );
function get_about() {
 	$id = $_POST['id'];
    $expandData = $_POST['expandData'];
  /** Made Query */
  	$query_about = get_post($id);
    
	$urlBanner = wp_get_attachment_url( get_post_thumbnail_id($id) );
    $lang = qtrans_getLanguage();
    $title = qtrans_use($lang, $query_about->post_title,false); 
    $content = qtrans_use($lang, $query_about->post_content,false); 
	?>
    <div class="row">
    	<div class=" kc_column kc_col-sm-3 ">
    		<div class="box-banner">
    			<img src="<?php echo $urlBanner;?>" style="position: relative"/>
    		</div>
    	</div>
    	<div class=" kc_column kc_col-sm-9">
    		<div class="credits_details">
    			<h3><?php echo $title;?></h3>
    			
    			<?php if(!empty($content)){?>
    			<div class="credits_desc noborder" >
    				<?php echo $content?>
    			</div>
    			<?php }?>
    			<div class="credits_controls">
    				<a href="javascript:void(0);" class="close" onclick="siteMain.closeExpand('<?php echo $expandData;?>');"><i class="fa fa-times" aria-hidden="true"></i></a>
    			</div>
    		</div>
    	</div>
    </div>
  <?php			
  exit;
}