$(document).ready(function () {
  var data = [];

  getTodo(function(){
    render(function(){
      renderDoneAction();
      renderDeleteAction(); 
    });
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

  function renderDoneAction() {
    $( ".done" ).each(function( index ) {
      $('#'+$(this).attr('id')).click(function(){
        doneTodo($(this).attr('id').match(/\d+/));
      });
      console.log( $(this).attr('id'));
    });
  }; 

  function renderDeleteAction() {
    $( ".delete" ).each(function( index ) {
      $('#'+$(this).attr('id')).click(function(){
        deleteTodo($(this).attr('id').match(/\d+/));
      });
      console.log( $(this).attr('id'));
    });
  }; 

  $('.submit').click(function () {
    todo = $('.new-todo').val();
    $('.new-todo').val(null);
    createTodo(todo);
  });
  
  function render(callback) {
    for (var i in data) {
      if (data[i].done == true) {
        $('.todo-done').append('<li class="mt5" id="li'+data[i].id+'"><button class="btn btn-warning btn-xs delete" id="delete'+data[i].id+'">Delete</button>&nbsp;&nbsp;'+data[i].name+'</li>');
      } else {
        $('.todo-active').append('<li class="mt5" id="li'+data[i].id+'"><button class="btn btn-info btn-xs done" id="done'+data[i].id+'">Done</button>&nbsp;&nbsp;' + data[i].name + '</li>');
      }
    }
    callback();
  }

  function getTodo(callback) {
     $.ajax({
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos',
      type: 'GET',
      dataType: 'json',
      success: function (responsed_data) {
        data = responsed_data;
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
        $('.todo-active').append('<li class="mt5" id="li'+responsed_data.id+
          '"><button class="btn btn-info btn-xs done" id="done'+responsed_data.id+
          '">Done</button>&nbsp;&nbsp;' + responsed_data.name + '</li>');
        renderDoneAction();
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

  function doneTodo(todoID) {
     $.ajax({
      type: 'PUT',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/'+todoID,
      data: JSON.stringify({"done": true}),
      dataType: "json",
      success: function (responsed_data) {
        console.log('done success'+todoID);
        let todoName = $('#li'+todoID).text().substring(6);
        $('#li'+todoID).remove();
        $('.todo-done').append('<li class="mt5" id="li'+todoID+
          '"><button class="btn btn-warning btn-xs delete" id="delete'+todoID+
          '">Delete</button>&nbsp;&nbsp;'+todoName+'</li>');
        renderDeleteAction();
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

  function deleteTodo(todoID) {
     $.ajax({
      type: 'DELETE',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/'+todoID,
      dataType: "json",
      success: function (responsed_data) {
        console.log('delete success'+todoID)
        $('#li'+todoID).remove();
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

