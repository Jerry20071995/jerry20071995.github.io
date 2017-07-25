$(document).ready(function () {
  var data = [];
  var item = 0;

  getTodo(function(){
    render('init');
  });

  function setHeader( xhr ) {
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('Uid', 'abc@gmail.com');
    xhr.setRequestHeader('Access-Token', 'mcrMPvs1S31GWFxTBUEBkg');
    xhr.setRequestHeader('Client', 'xtBmzMWmXCD2kh2o1HtQNg');
  } 

  function notify( message, style ) {
    $.notify(message, style);
  }

  $( '#new-todo' ).on( 'keyup', function( e ) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) { 
      e.preventDefault();
      $('.fa-ul').css(
        "display", "block"
      );
      todo = $('#new-todo').val();
      createTodo(todo);
      $('#new-todo').val(null);
    }
  });
  
  $( '#all' ).click(function() {
    $( '#completed-content' ).css( "display", "none" );
    $( '#active-content' ).css( "display", "none" );
    $( '#all-content' ).css( "display", "block" ); 
  });

  $( '#active' ).click(function() {
    $('#all-content').css("display", "none");
    $('#completed-content').css("display", "none");
    $('#active-content').css("display", "block");
  });

  $( '#completed' ).click(function() {
    $('#all-content').css("display", "none");
    $('#active-content').css("display", "none");
    $('#completed-content').css("display", "block");
  });


  function checkCompletedLenght() {
    if ($("#completed-content li").length < 1) {
      $('#clear-completed').css("display", "none");
    } else {
      $('#clear-completed').css("display", "block");
    };
  };


  function count() {
    item = $('li').length;
    $('.number-todo').append(item);
  };


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


  function render(action, responsed_data) {
    if (action === 'init') {
      for (var i in data) {
        let checked = data[i].done ? 'checked' : '';
        let style = data[i].done ? 'style="display: visible"' : 'style="display: hidden"';
        $('#all-content').append('<li class="mt5 show-data"  id="li'+data[i].id+
        '"><input type="checkbox"  class="done checkbox" '+checked+' id="done'+data[i].id+'"></label>' +data[i].name+
        '<i class="fa fa-times delete"  aria-hidden="true" id="done'+data[i].id+'"></i></li>');
        
        if (data[i].done) {
        $('#completed-content').append('<li class="mt5 show-data" id="completed'+data[i].id+
          '"><input type="checkbox" class="checkbox" checked  id="done'+data[i].id+'"></label>' +data[i].name+
          '<i class="fa fa-times delete"  aria-hidden="true" id="done'+data[i].id+'"></i></li>');
        }
        else {
          $('#active-content').append('<li class="mt5 show-data" id="acitve'+data[i].id+
          '"><input type="checkbox" class="checkbox" id="done'+data[i].id+'"></label>' +data[i].name+
          '<i class="fa fa-times delete" aria-hidden="true" id="done'+data[i].id+'"></i></li>');
        };
      };
    }

    if (action === 'create') {
     $('#all-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
      '"><input type="checkbox" class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
      '<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
      ; 
      $('#active-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
      '"><input type="checkbox" class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
      '<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
      ;
      $('#completed-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
      '"><input type="checkbox" checked class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
      '<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
      ;
      $('.fa-ul').css(
        "display", "none"
      );
    }
    
    if (action === 'done') {
      $('#all-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
      '"><input type="checkbox" checked class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
      '<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
      ;
      $('#active-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
      '"><input type="checkbox" class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
      '<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
      ; 
      $('#completed-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
      '"><input type="checkbox" checked class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
      '<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
      ;
    }
    if (action === 'delete') {
      $('#all-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
      '"><input type="checkbox" checked class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
      ';<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
      ; 
      $('#completed-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
      '"><input type="checkbox" checked class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
      ';<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
      ;
      $('#active-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
      '"><input type="checkbox" class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
      '<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
      ;
    }
    
    renderAction();
    renderDeleteAction(); 
    checkCompletedLenght();
  };


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
  };


  function createTodo( name ) {
     $.ajax({
      type: 'POST',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos',
      data: JSON.stringify({"name": name}),
      dataType: "json",
      success: function ( responsed_data ) {
        data.push(responsed_data);
        // $('#all-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
        // '"><input type="checkbox" class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
        // '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
        // ; 
        // $('#active-content li:first-child').before('<li class="mt5 show-data" id="li'+ responsed_data.id +
        // '"><input type="checkbox" class="checkbox" id="done' + responsed_data.id + '"></label>' + responsed_data.name +
        // '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times delete" aria-hidden="true" id="delete' + responsed_data.id+'"></i></li>')
        // ;
        // $('.fa-ul').css(
        //   "display", "none"
        // );
        render('create', responsed_data);    
        notify("createTodo success","success");
        renderAction();
        renderDeleteAction();
      },
      error: function (error) {
        alert(JSON.stringify(error));
        notify("createTodo error","error");
      },
      beforeSend: setHeader
    });
  };


  function doneTodo( todoID ) {
     $.ajax({
      type: 'PUT',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/'+todoID,
      data: JSON.stringify({"done": true}),
      dataType: "json",
      success: function ( responsed_data ) {
        console.log('done success'+todoID);
        render('done', responsed_data);
        renderDeleteAction();
      },
      error: function (error) {
        alert(JSON.stringify(error));
      },
      beforeSend: setHeader
    });
  };


  function activeTodo( todoID ) {
     $.ajax({
      type: 'PUT',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/'+todoID,
      data: JSON.stringify({"done": null}),
      dataType: "json",
      success: function ( responsed_data ) {
        console.log('active success'+todoID);
        $('#li' + todoID + 'input').not(':checked');
        render('done', responsed_data);
        renderDeleteAction();
      },
      error: function (error) {
        alert(JSON.stringify(error));
      },
      beforeSend: setHeader
    });
  };


  function deleteTodo( todoID ) {
     $.ajax({
      type: 'DELETE',
      url: 'https://angular-task-list.herokuapp.com/task_lists/100/todos/'+todoID,
      dataType: "json",
      success: function ( responsed_data ) {
        console.log('delete success'+todoID)
        $('#li'+todoID).remove();
        notify("deleteTodo success", "success");
        render('delete', responsed_data);
      },
      error: function (error) {
        notify("deleteTodo error", "error");
      },
      beforeSend: setHeader
    });
  };

  
});

