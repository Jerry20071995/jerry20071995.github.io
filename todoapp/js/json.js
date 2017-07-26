$(document).ready(function () {
  var data = [];
  var item = 0;
  var styleOpacity = '';

  getTodo();

  function setHeader(xhr) {
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('Uid', 'abc@gmail.com');
    xhr.setRequestHeader('Access-Token', 'mcrMPvs1S31GWFxTBUEBkg');
    xhr.setRequestHeader('Client', 'xtBmzMWmXCD2kh2o1HtQNg');
  }

  function notify(message, style) {
    $.notify(message, style);
  }

  $('#new-todo').on('keyup', function (e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) {
      if ($(this).val() != '') {
        e.preventDefault();
        $('.fa-ul').css(
          "display", "block"
        );
        todo = $('#new-todo').val();
        createTodo(todo);
        $('#new-todo').val(null);
      }
    }
  });


  $('#all').click(function () {
    $('#completed-content').css("display", "none");
    $('#active-content').css("display", "none");
    $('#all-content').css("display", "block");
  });


  $('#active').click(function () {
    $('#all-content').css("display", "none");
    $('#completed-content').css("display", "none");
    $('#active-content').css("display", "block");
  });


  $('#completed').click(function () {
    $('#all-content').css("display", "none");
    $('#active-content').css("display", "none");
    $('#completed-content').css("display", "block");
  });


  $('#clear-completed').click(function() {
    for (var i in data) {
      if (data[i].done === true) {
        deleteTodo(data[i].id);
      }
    }
  });


  function checkCompletedLenght() {
    if ($("#completed-content li").length < 1) {
      $('#clear-completed').css("display", "none");
    } else {
      $('#clear-completed').css("display", "block");
    }
    ;
  };


  function renderDeleteAction() {
    $('.delete').click(function () {
      deleteTodo(parseInt($(this).attr('id').match(/\d+/), 10));
    });
  };

 function renderAction() {
    $(".update").each(function (index) {
      $('#'+$(this).attr('id')).click(function () {
        updateTodo(parseInt($(this).attr('id').match(/\d+/), 10)); 
      });
    });
  };

 function renderActive() {
    $(".activeUpdate").each(function (index) {
      $('#'+$(this).attr('id')).click(function () {
        updateTodo(parseInt($(this).attr('id').match(/\d+/), 10)); 
      });
    });
  };

  function renderCompleted() {
    $(".comletedUpdate").each(function (index) {
      $('#'+$(this).attr('id')).click(function () {
        updateTodo(parseInt($(this).attr('id').match(/\d+/), 10)); 
      });
    });
  };


  function render( action, renderData ) {

    if ( action === 'init' ) {
      for (var i = data.length - 1; i > -1; i--) {
        let checked = data[i].done ? 'checked' : '';
        let style = data[i].done ? 'style="display: visible"' : 'style="display: hidden"';
        let styleOpacity = $('.checkbox').is('checked') ? 'style="opacity: 0.6;text-decoration: line-through"' : 'style="opacity: 1"';

        $('#all-content').append('<li class="mt5 show-data" '+styleOpacity+'  id="li'+data[i].id +
          '"><input type="checkbox"  class="update checkbox" '+checked+' id="done'+data[i].id+'">'+data[i].name +
          '<i class="fa fa-times delete"  aria-hidden="true" id="done'+data[i].id+'"></i></li>');

        if (data[i].done) {
          $('#completed-content').append('<li class="mt5 show-data" '+styleOpacity+' id="completed'+data[i].id +
            '"><input type="checkbox" class=" checkbox comletedUpdate" checked  id="doneCompleted'+data[i].id+'">'+data[i].name +
            '<i class="fa fa-times delete"  aria-hidden="true" id="done'+data[i].id+'"></i></li>');
        }
        else {
          $('#active-content').append('<li class="mt5 show-data" id="active'+data[i].id +
            '"><input type="checkbox" class=" checkbox activeUpdate " id="doneActive'+data[i].id+'">'+data[i].name +
            '<i class="fa fa-times delete" aria-hidden="true" id="done'+data[i].id+'"></i></li>');
        };
      };
    }

    if ( action === 'create' ) {
      $('#all-content li:first-child').before('<li '+styleOpacity+' class="mt5 show-data" id="li'+renderData.id +
        '"><input type="checkbox" class="update checkbox" id="done'+renderData.id+'">'+renderData.name +
        '<i class="fa fa-times delete" aria-hidden="true" id="delete'+renderData.id+'"></i></li>')
      ;
      $('#active-content li:first-child').before('<li class="mt5 show-data" id="active'+renderData.id +
        '"><input type="checkbox" class="checkbox activeUpdate " id="doneActive'+renderData.id+'">'+renderData.name +
        '<i class="fa fa-times delete" aria-hidden="true" id="delete'+renderData.id+'"></i></li>')
      ;
      if ( action === 'create' && renderData.done === true ) {
        $('#completed-content li:first-child').before('<li class="mt5 show-data" '+styleOpacity+' style="opacity: 0.6" id="acitve'+renderData.id +
          '"><input type="checkbox" checked  class="checkbox comletedUpdate " id="doneCompleted'+renderData.id+'">'+renderData.name +
          '<i class="fa fa-times delete" aria-hidden="true" id="delete'+renderData.id+'"></i></li>')
        ;
      }
      $('.fa-ul').css(
        "display", "none"
      );
    }


    if ( action === 'update' && renderData.done === true ) {
      $('#done'+renderData.id).attr("checked", true);
      $('#active'+renderData.id).remove();
      $('#completed-content').append('<li class="mt5 show-data" '+styleOpacity+' id="completed'+renderData.id +
            '"><input type="checkbox" class="checkbox comletedUpdate" checked  id="doneCompleted'+renderData.id+'">'+renderData.name +
            '<i class="fa fa-times delete"  aria-hidden="true" id="done'+renderData.id+'"></i></li>');
    }


    if (action === 'update' && renderData.done === false) {
      $('#done'+renderData.id).attr("checked", false);
      $('#completed'+renderData.id).remove();
      $('#active-content').append('<li class="mt5 show-data" id="active'+renderData.id +
            '"><input type="checkbox" class="checkbox activeUpdate" id="doneActive'+renderData.id+'">'+renderData.name +
            '<i class="fa fa-times delete" aria-hidden="true" id="done'+renderData.id+'"></i></li>');
    }
    if (action === 'delete') {
      $('#li'+renderData.id).remove();
      if (renderData.done) {$('#completed'+renderData.id).remove()} else {$('#acitve'+renderData.id).remove()}
    }

    $("#all-content").find("*").off();    
    $("#active-content").find("*").off();    
    $("#completed-content").find("*").off();    

    renderAction();
    renderDeleteAction();
    checkCompletedLenght();
    renderActive();
    renderCompleted();
  };


  function getTodo() {
    $.ajax({
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos',
      type: 'GET',
      dataType: 'json',
      success: function (responsed_data) {
        data = responsed_data;
        console.log('get todos success');
        notify('getTodo success','success');
        render('init');
      },
      error: function () {
        notify('getTodo error','error');
      },
      beforeSend: setHeader
    });
  };


  function createTodo(name) {
    $.ajax({
      type: 'POST',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos',
      data: JSON.stringify({"name": name}),
      dataType: "json",
      success: function (responsed_data) {
        data.push(responsed_data);
        render('create', responsed_data);
        notify("createTodo success", "success");
      },
      error: function (error) {
        notify("createTodo error", "error");
      },
      beforeSend: setHeader
    });
  };


  function updateTodo(todoID) {
    let checked = data.filter(h => h.id === todoID)[0].done === true?false:true;
    $.ajax({
      type: 'PUT',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/'+todoID,
      data: JSON.stringify({"done": checked}),
      dataType: "json",
      success: function (responsed_data) {
        data.filter(h => h.id === todoID)[0].done = checked;
        console.log('update success todo No. '+todoID+' to '+checked);
        render('update', responsed_data);
        notify("updateTodo success", "success");
      },
      error: function (error) {
        notify("updateTodo ", "error");
      },
      beforeSend: setHeader
    });
  };

  function deleteTodo(todoID) {
    $.ajax({
      type: 'DELETE',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/'+todoID,
      dataType: "json",
      success: function (responsed_data) {
        notify("deleteTodo success", "success");
        console.log('delete success todo No. '+todoID);
        deleteData = data.filter(h => h.id === todoID)[0];
        data = data.filter(h => h.id !== todoID);

        render('delete', deleteData);
      },
      error: function (error) {
        notify("deleteTodo error", "error");
      },
      beforeSend: setHeader
    });
  };


});

