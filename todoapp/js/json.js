$(document).ready(function () {
  var data = [];
  var item = 0;

  getTodo(function(){
    render(function(){
      renderAction();
      renderDeleteAction(); 
      checkCompletedLenght();
      checkActiveLenght();
    });
  });

  function setHeader(xhr) {
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('Uid', 'abc@gmail.com');
    xhr.setRequestHeader('Access-Token', 'mcrMPvs1S31GWFxTBUEBkg');
    xhr.setRequestHeader('Client', 'xtBmzMWmXCD2kh2o1HtQNg');
  } 
  $('#new-todo').on('keyup', function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) { 
      e.preventDefault();
      todo = $('#new-todo').val();
      createTodo(todo);
      $('#new-todo').val(null);
    }
  });
  
  $('#all').click(function() {
    $('#completed-content').css("display", "none");
    $('#active-content').css("display", "none");
    $('#all-content').css("display", "block");
  });

  $('#active').click(function() {
    $('#all-content').css("display", "none");
    $('#completed-content').css("display", "none");
    $('#active-content').css("display", "block");
  });

  $('#completed').click(function() {
    $('#all-content').css("display", "none");
    $('#active-content').css("display", "none");
    $('#completed-content').css("display", "block");
  });


  function checkCompletedLenght() {
    if ($("#completed-content li").length < 1) {
      $('#clear-completed').css("display", "none");
    } else {$('#clear-completed').css("display", "block");}
  }

  function checkActiveLenght() {
    item = $("#active-content li").length;
    $('.number-todo').append(item);
  }

  function renderDeleteAction() {
    $('.delete').click(function() {
      deleteTodo($(this).attr('id').match(/\d+/));
    });
  }; 
  

  function renderAction() {
    $( ".done" ).each(function( index ) {
      $('#'+$(this).attr('id')).click(function(){
         if ($(this).is(':checked')) {
          doneTodo($(this).attr('id').match(/\d+/));
         }else {
           activeTodo($(this).attr('id').match(/\d+/));
         }
      });
      console.log( $(this).attr('id'));
    });
  }; 


  function render(callback) {
    for (var i in data) {
      let checked = data[i].done ? 'checked' : '';
      let style = data[i].done ? 'style="display: visible"' : 'style="display: hidden"';
      $('#all-content').append('<li class="mt5 show-data"  id="li'+data[i].id+
      '"><input type="checkbox" class="done" value="" '+checked+' id="done'+data[i].id+'"></label>' +data[i].name+
      '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times delete"  aria-hidden="true" id="done'+data[i].id+'"></i></li>');
      
      if (data[i].done) {
      $('#completed-content').append('<li class="mt5 show-data" id="li'+data[i].id+
        '"><input type="checkbox" value="" checked  id="done'+data[i].id+'"></label>' +data[i].name+
        '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times delete"  aria-hidden="true" id="done'+data[i].id+'"></i></li>');
      }
      else {
        $('#active-content').append('<li class="mt5 show-data" id="li'+data[i].id+
        '"><input type="checkbox" value="" id="done'+data[i].id+'"></label>' +data[i].name+
        '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times delete" aria-hidden="true" id="done'+data[i].id+'"></i></li>');
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
        alert('error');
      },
      beforeSend: setHeader
    });
  }


  function createTodo( name ) {
     $.ajax({
      type: 'POST',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos',
      data: JSON.stringify({"name": name}),
      dataType: "json",
      success: function ( responsed_data ) {
        data.push(responsed_data);
        $('#all-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
        '"><input type="checkbox" value="" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
        '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
        ;
        renderAction();
        renderDeleteAction();
      },
      error: function (error) {
        alert(JSON.stringify(error));
      },
      beforeSend: setHeader
    });
  }


  function doneTodo( todoID ) {
     $.ajax({
      type: 'PUT',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/'+todoID,
      data: JSON.stringify({"done": true}),
      dataType: "json",
      success: function ( responsed_data ) {
        console.log('done success'+todoID);
        $('#li' + todoID + 'input').is('checked');
        renderDeleteAction();
      },
      error: function (error) {
        alert(JSON.stringify(error));
      },
      beforeSend: setHeader
    });
  }


  function activeTodo( todoID ) {
     $.ajax({
      type: 'PUT',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/'+todoID,
      data: JSON.stringify({"done": null}),
      dataType: "json",
      success: function ( responsed_data ) {
        console.log('active success'+todoID);
        $('#li' + todoID + 'input').not(':checked');
        renderDeleteAction();
      },
      error: function (error) {
        alert(JSON.stringify(error));
      },
      beforeSend: setHeader
    });
  }


  function deleteTodo( todoID ) {
     $.ajax({
      type: 'DELETE',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/'+todoID,
      dataType: "json",
      success: function ( responsed_data ) {
        console.log('delete success'+todoID)
        $('#li'+todoID).remove();
      },
      error: function (error) {
        alert(JSON.stringify(error));
      },
      beforeSend: setHeader
    });
  }


  function deleteAllTodoCompleted( done, todoID ) {
     $.ajax({
      type: 'DELETE',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/' + todoID,
      data: JSON.stringify({"done": true}),
      dataType: "json",
      success: function ( responsed_data ) {
        console.log('delete success' + todoID)
        $('#li'+todoID).remove();
      },
      error: function (error) {
        console.log(JSON.stringify(error));
      },
      beforeSend: setHeader
    });
  }

  
});

