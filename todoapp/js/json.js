$(document).ready(function () {
  var data = [];
  var todo = '';

  getTodo(function(){
    render();
  });
  	
  	$('.input-group button').attr('disabled', true);
	  $('.input-group input').keyup(function() {
	      var empty = true;
	      $('.input-group input').each(function() {
	          if ($(this).val().length !== 0) {
	              empty = false;
	          }
	      });
	      if (empty) {
	          $('.input-group button').attr('disabled', 'disabled');
	      } else {
	          $('.input-group button').attr('disabled', false);
	      }
	  });


	  $('.submit').click(function () {
	    todo = $('.new-todo').val();
	    $('.new-todo').val(null);
	    createTodo(todo);
	  });
	  

	    $('.done').click(function() {
	  		var done = $(this).prent().val();
	  		alert(done);
	  });
	  function render() {
	    console.log(data);
	    for (var i in data) {
	      if (data[i].done == true) {
	        $('.todo-done').append('<li class="mt5"  attr.index=' + data[i].id + '><button class="btn btn-warning btn-xs done">Delete</button>&nbsp;&nbsp;' + data[i].name + '</li>');
	      } else {
	        $('.todo-active').append('<li class="mt5" attr.index=' + data[i].id + '><button class="btn btn-info btn-xs done" >Done</button>&nbsp;&nbsp;' + data[i].name + '</li>');
	      }
	    }
	  }

	  function getTodo(callback) {
	     $.ajax({
	      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos',
	      type: 'GET',
	      dataType: 'json',
	      success: function (responsed_data) {
	        data = responsed_data;
	        console.log(JSON.stringify(data));
	        callback();
	      },
	      error: function () {
	        alert('boo!');
	      },
	      beforeSend: setHeader
	    });

	     function setHeader(xhr) {
	      xhr.setRequestHeader('Content-Type', 'application/json');
	      xhr.setRequestHeader('Uid', 'abc@gmail.com');
	      xhr.setRequestHeader('Access-Token', 'mcrMPvs1S31GWFxTBUEBkg');
	      xhr.setRequestHeader('Client', 'xtBmzMWmXCD2kh2o1HtQNg');
	    } 
	  }


	  function createTodo(name) {
	     $.ajax({
	      type: 'POST',
	      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos',
	      data: JSON.stringify({"name": name}),
	      dataType: "json",
	      success: function (responsed_data) {
	        data.push(responsed_data);
	      },
	      error: function (error) {
	        alert(JSON.stringify(error));
	      },
	      beforeSend: setHeader
	    });

	    function setHeader(xhr) {
	      xhr.setRequestHeader('Content-Type', 'application/json');
	      xhr.setRequestHeader('Uid', 'abc@gmail.com');
	      xhr.setRequestHeader('Access-Token', 'mcrMPvs1S31GWFxTBUEBkg');
	      xhr.setRequestHeader('Client', 'xtBmzMWmXCD2kh2o1HtQNg');
	    }
	  }

		  function doneTodo(done) {
		     $.ajax({
		      type: 'GET',
		      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos',
		      data: JSON.stringify({done}),
		      dataType: "json",
		      success: function (done) {
		        alert(done);
		      },
		      error: function (error) {
		        alert(JSON.stringify(error));
		      },
		      beforeSend: setHeader
		    });

		    function setHeader(xhr) {
		      xhr.setRequestHeader('Content-Type', 'application/json');
		      xhr.setRequestHeader('Uid', 'abc@gmail.com');
		      xhr.setRequestHeader('Access-Token', 'mcrMPvs1S31GWFxTBUEBkg');
		      xhr.setRequestHeader('Client', 'xtBmzMWmXCD2kh2o1HtQNg');
		    }
		  }
});