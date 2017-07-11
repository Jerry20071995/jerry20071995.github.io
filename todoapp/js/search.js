$('#button-dao-nguoc').click(function(){

    // Lấy đối tượng cần thực thi
    var object = $('div');

    // Lặp qua từng đối tượng object 
    for (var i = 0; i < object.length; i++){
        if ($(object[i]).hasClass('red')){
            $(object[i]).removeClass('red').addClass('yellow');
        }
        else if ($(object[i]).hasClass('yellow')){
            $(object[i]).removeClass('yellow').addClass('red');
        }
    }
});
$('.hello').text('hello');
$('.hello').css({
	background: "red",
	width: "40px",
	height: "40px"
});
$('div:eq(1)').css('background','green');

$('div span:last-child');

$('input').focus(function(){
	$(this).css({
		background: '#000',
	});
});
$('input').blur(function(){
	$(this).css({
		background: '#fff',
	});
});
$('input').on({
	mouseenter: function(){
		$(this).css({
			background: '#ccc',
		});
	},
	mouseleave: function(){
		$(this).css({
			background: '#fff',
		});
	},
	click: function(){
		$(this).css({
			background: 'yellow',
		});
	}
});
$('#btn1').click(function(){
	alert('Text: ' + $('#test').length);
});
$('#btn2').click(function(){
	alert('HTML: ' + $('#test').html());
});
$('.btn1').click(function(){
	$('#test1').text('Hello word!');
});
$('.link').click(function(event){
	event.preventDefault();
});
$(document).ready(function(){
	$('button').on('click',function(){
		var price = $('<p>gfgfg</p>');
		$('.gfg').append(price);
		remove('button');
	});
});