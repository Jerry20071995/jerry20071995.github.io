$(document).ready(function() {
	$("#new-todo").on("keydown",function search(event) {
	    if(event.keyCode == 13) {
	    	todo = $(this).val();
	    	var total = 0;
	    	if(todo != '') {
		       	$('#show').append('<li class="show-data"><input type="checkbox" value=""  class="checkbox"><span>'+todo+'</span><i class="fa fa-times" aria-hidden="true"></i></li>');
		       	$('#new-todo').val(null);
		       	var checkbox = $('.checkbox');
	       		$('.checkbox').click(function() {
	       			for(var i = 0 ; i<= checkbox.length; i++) {
		       			if($(this).is(":checked") ) {
		       				$(this).parent().addClass('all-completed');
		       				$(this).parent().css({"text-decoration": "line-through","opacity":"0.5"});
		       			}else {
		       				$(this).parent().removeClass('all-completed');
		       				$(this).parent().css({"text-decoration": "none","opacity":"1"});
		       			};
	       			};
	       		});



	       		$('.checkbox').one('click', function() {
                   if ($('.footer-last button').length === 0) {
                       $('.footer-last').append('<button id="clear-all">Clear Completed </button>');
                   };
                });

	       		$('button').click(function() {
       				$('.all-completed').remove();
       			});

	       		$('#active').click(function() {
       				$('.show-data').parent().find('input[type=checkbox]:not(checked)').parent().show();
	       			$('.show-data').parent().find('input[type=checkbox]:checked').parent().hide();
	       		});



	       		$('#completed').click(function() {
	       			$('.show-data').parent().find('input[type=checkbox]:not(checked)').parent().hide();
	       			$('.show-data').parent().find('input[type=checkbox]:checked').parent().show();
	       		});


	       		$('#all').click(function() {
	       			$('.show-data').show();
	       		});


   				


	       		$('.fa-times').click(function() {
	       			for(var i = 0; i<= $('.fa-times').length; i++) {
	       				$(this).parent().remove();
	       			};
	       		});
	       		
	       		var countChecked = function() {
				  var n = $( "input[type=checkbox]:not(checked)" ).length;
				  $( ".number-todo" ).append(n);
				};
				countChecked();
				$( "input[type=checkbox]" ).one( "click", countChecked );	
		    };
	    }; 
	});

});

