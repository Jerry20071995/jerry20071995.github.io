$(document).ready(function(){
    $('.btn_button i').click(function(){
    	$('#block-mos-branding').slideToggle('medium');    	
    	if ($('.btn_button i').hasClass( "fa-times" )) {
    		$('.btn_button i').removeClass('fa-times');
    		$('.btn_button i').addClass('fa-bars');    	
    		$('.main-hour').removeClass('fix_new');	
    	}else{
    	$('.btn_button i').removeClass('fa-bars');
    	$('.btn_button i').addClass('fa-times');
    	$('.main-hour').addClass('fix_new');
    }
    	
    });
})