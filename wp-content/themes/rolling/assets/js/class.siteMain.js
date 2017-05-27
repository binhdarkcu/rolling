// JavaScript Document
var siteMain = (function() {
	// PARAMATER
	$ = jQuery;
	
	// INIT 
	function init(){
		initEvent();
	}
	
	function initEvent(){
		jQuery('.chooselink').on( 'click', function( e ) {
			loadExpandContent($(this));
			e.preventDefault();
		});
	}
	
	function loading_credits(){
		
	}
	function closeExpand(){
		jQuery('.expandAboutData').animate({'height':'0','overflow':'hidden','padding':"0 !important"},300);
 		jQuery( '.expandAboutData' ).html('');
	}
	
	function next(){
		//loadcontentcredit($this);
	}
	
	function prev(){
		//loadcontentcredit($this);
	}
	
	function loadExpandContent($this){
		//jQuery('.loading-credit').show();
		//$this.parent().find('.loading').show();
		/** Prevent Default Behaviour */
		var url_ajax = $('.ajaxurl').val();
		/** Get Post ID */
		var post_id = $this.attr( 'id' );
		
		jQuery('.expandAboutData').css('opacity',0);
		 $.ajaxSetup({
            cache: false
        });
		/** Ajax Call */
		$.ajax({
		  url: url_ajax,
		  type: 'POST',
		  dataType: 'html',
		  data: ({ action:'get_about', id:post_id }),
		  cache: false
		})
		.done(function( html ) {
		    //var $ajax_response = $( data );
			jQuery( '.expandAboutData' ).html( html );
			jQuery('.expandAboutData').css({'height':'auto','overflow':'inherit','padding-bottom':"110px!important"});
			jQuery('.expandAboutData').animate({'opacity':1},500);														
			var offset = jQuery('.expandAboutData').offset().top;

			jQuery('html, body').animate({scrollTop: offset - 86}, 500);
		});			
	}
	// RETURN
	return {
		init:init,
		closeExpand:closeExpand
	}
	
})();

jQuery(document).ready(function(){
	siteMain.init();
});	
