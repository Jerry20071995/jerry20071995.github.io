jQuery(document).ready(function($){
	var timelineBlocks = $('.cd-timeline-block'),
		offset = 0.8;

	//hide timeline blocks which are outside the viewport
	hideBlocks(timelineBlocks, offset);

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) 
			? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
			: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
	});

	function hideBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		});
	}

	function showBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		});
	}
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$('.menu_icon_responsive .fa').click(function() {
			$('.right-bar').toggle( "");
			$('.menu_icon_responsive .fa').hide();
			$('.content').removeClass('width100');

		});
		$('.end-right img').click(function() {
			$('.right-bar').toggle( "");
			$('.menu_icon_responsive .fa').show();
			$('.content').addClass('width100');
		});
	}
	if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$('.menu_icon_responsive .fa').hide();
		$('.end-right img').click(function() {
			$('.right-bar').toggle( "");
			$('.content').addClass('width100');
			$('.menu_icon_responsive .fa').show();
		});
		$('.menu_icon_responsive .fa').click(function() {
			$('.right-bar').toggle( "");
			$('.menu_icon_responsive .fa').hide();
			$('.content').removeClass('width100');

		});
	}
});