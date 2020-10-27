$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

var BaseRecord=(function() {

return {

    more: function(id){
        var id = Number(id);
        var ajaxSetting={
            method: 'get',
            url: '/more',
            data: {
                more: id,
            },
            success: function(data){
                //alert(data.table);
                var more = id + 1;
                $('#news-list').append(data.table);
                $('#next').html(more)

            },
            error: function(data){
                alert(data.responseText);
            },
        };
        $.ajax(ajaxSetting);
    },

destroynews: function(id){
var ajaxSetting = {
   method: 'delete',
   url: '/news/'+id,
   //data
   success: function(data){
       $('#back-pannel').html(data.table);
       $('.listbuttonremove').click(function(){
        BaseRecord.destroynews($(this).attr('id'));
        return false;
        });
   },
   error: function(data){
        alert(data.responseText);
    },
};
$.ajax(ajaxSetting);
},

destroystaff: function(id){
var ajaxSetting = {
   method: 'delete',
   url: '/teachers/'+id,
   //data
   success: function(data){
       $('#teacher-pannel').html(data.table);
       $('.listbuttonremove').click(function(){
        BaseRecord.destroystaff($(this).attr('id'));
        return false;
        });
   },
   error: function(data){
        alert(data.responseText);
    },
};
$.ajax(ajaxSetting);
},

destroyphoto: function(id){
var ajaxSetting = {
   method: 'delete',
   url: '/galleries/'+id,
   //data
   success: function(data){
       $('#gallery-pannel').html(data.table);
       $('.listbuttonremove').click(function(){
        BaseRecord.destroyphoto($(this).attr('id'));
        return false;
        });
   },
   error: function(data){
        alert(data.responseText);
    },
};
$.ajax(ajaxSetting);
},


destroymessage: function(id){
var ajaxSetting = {
   method: 'post',
   url: '/remove',
   data: {
         id: id,
      },
   success: function(data){
       BaseRecord.lisoofmessage();
   },
   error: function(data){
        alert(data.responseText);
    },
};
$.ajax(ajaxSetting);
},

lisoofmessage: function(){
var ajaxSetting = {
   method: 'get',
   url: '/xabar',
  success: function(data){
       $('#message-pannel').html(data.table);
       $('.listbuttonremove').click(function(){
        BaseRecord.destroymessage($(this).attr('id'));
        return false;
        });
   },
};
$.ajax(ajaxSetting);
},


search: function(name){
   var ajaxSetting={
      method: 'get',
      url: '/', //vagrant ./
      data: {
         search: name,
      },
      success: function(data){
         //alert(data.table);
          $('#news-list').html(data.table);
          $('.next_button').css('display', 'none')
      },
   };
   $.ajax(ajaxSetting);
},



}

})();
