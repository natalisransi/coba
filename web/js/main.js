$(function(){
    //alert('dengan ini'); 
    //get the klik of the create button
    $('#modalButton').click(function(){
        $('#modal').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
    });
});
