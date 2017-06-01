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
			loadExpandContent($(this), '.expandAboutData', 'get_about');
			e.preventDefault();
		});
		jQuery('.chooseexpertise').on( 'click', function( e ) {
			loadExpandContent($(this), '.expandExpertiseData', 'get_about');
			e.preventDefault();
		});
		jQuery('.chooseourteam').on( 'click', function( e ) {
			loadExpandContent($(this), '.expandOurTeamData', 'get_about');
			e.preventDefault();
		});
	}

	function loading_credits(){

	}
	function closeExpand(expandData){
		jQuery(expandData).animate({'height':'0','overflow':'hidden','padding':"0 !important"},300);
 		jQuery(expandData).html('');
	}

	function next(){
		//loadcontentcredit($this);
	}

	function prev(){
		//loadcontentcredit($this);
	}

	function loadExpandContent($this, expandData, action){
		//jQuery('.loading-credit').show();
		//$this.parent().find('.loading').show();
		/** Prevent Default Behaviour */
		var url_ajax = $('.ajaxurl').val();
		/** Get Post ID */
		var post_id = $this.attr( 'id' );

		jQuery(expandData).css('opacity',0);
		 $.ajaxSetup({
            cache: false
        });
		/** Ajax Call */
		$.ajax({
		  url: url_ajax,
		  type: 'POST',
		  dataType: 'html',
		  data: ({ action: action, id:post_id, expandData: expandData}),
		  cache: false
		})
		.done(function( html ) {
		    //var $ajax_response = $( data );
			jQuery( expandData ).html( html );
			jQuery(expandData).css({'height':'auto','overflow':'inherit','padding-bottom':"110px!important"});
			jQuery(expandData).animate({'opacity':1},500);
			var offset = jQuery(expandData).offset().top;

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
