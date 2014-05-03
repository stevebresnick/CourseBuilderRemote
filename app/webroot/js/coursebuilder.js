$(document).ready(function() {

    $(document).on('click', '.btn-add', function(event) {
        event.preventDefault();

        var field = $(this).closest('.form-group');
        var field_new = field.clone();

        $(this)
                .toggleClass('btn-default')
                .toggleClass('btn-add')
                .toggleClass('btn-danger')
                .toggleClass('btn-remove')
                .html('–');

        field_new.find('input').val('');
        field_new.insertAfter(field);
    });

    $(document).on('click', '.btn-remove', function(event) {
        event.preventDefault();
        $(this).closest('.form-group').remove();
    });
    
    //BRIGHTCOVE RESOURCE TYPE
    $('.brightcove_field').hide();
    $('.select_resource_type').change(function(){
        $('.brightcove_field').hide();
        var type = $(this).val();
        if(type == 11){
            $('.brightcove_field').show();
        }
    });
    
    //Resource Popovers
    $(function ()  
{
  $('.resourcedescription').popover(
  {
     trigger: 'hover',
     html: true,
     placement: 'right',
  });
});

/*
$('#htmlsourcecode').popover(
  {
     trigger: 'click',
     html: true,
     placement: 'left',
  });*/
  
  $('#htmlsourcecode').click( function(){
     $('#htmlsource').toggle();
  });
    

});
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


