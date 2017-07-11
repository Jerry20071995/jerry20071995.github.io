$(document).ready(function() {
	$("#new-todo").on("keydown",function search(event) {
	    if(event.keyCode == 13) {
	    	todo = $(this).val();
	    	var total = 0;
	    	if(todo != '') {
		       	$('#show').append('<li id="show-data"><input type="checkbox" value=""  class="checkbox"><span>'+todo+'</span><i class="fa fa-times" aria-hidden="true"></i></li>');
		       	$('#new-todo').val(null);
		       	var checkbox = $('.checkbox');
	       		$('.checkbox').click(function() {
	       			for(var i = 0 ; i<= checkbox.length; i++) {
		       			if($(this).is(":checked") ) {
		       				$('#show-data').addClass('completed');
		       				$(this).parent().css({"text-decoration": "line-through","opacity":"0.5"});
		       			}else {
		       				$('#show-data').removeClass('completed');
		       				$(this).parent().css({"text-decoration": "none"});
		       			};
	       			};
	       		});
	       		var number = function() {
					total = $('input[type=checkbox]:not(checked)').length;
		       	};
		       	$('.checkbox').one('click', function() {
		       		$('.footer-last').append('<button id="clear-all">Clear Complete </button>');
		       	})
	       		$('#active').click(function() {
       				$('#show-data').parent().find('input[type=checkbox]:not(checked)').parent().show();
	       			$('#show-data').parent().find('input[type=checkbox]:checked').parent().hide();
	       		});
	       		$('#completed').click(function() {
	       			$('#show-data').parent().find('input[type=checkbox]:not(checked)').parent().hide();
	       			$('#show-data').parent().find('input[type=checkbox]:checked').parent().show();
	       		});
	       		$('#all').click(function() {
	       			$('#show-data').show();
	       		});
   				$('#clear-all').click(function() {
       				$('.completed').remove();
       			});
	       		$('.fa-times').click(function() {
	       			for(var i = 0; i<= $('.fa-times').length; i++) {
	       				$(this).parent().remove();
	       			};
	       		});	
	       		$('.number-todo').append(number(total));	
		    };
	    }; 
	});

});

