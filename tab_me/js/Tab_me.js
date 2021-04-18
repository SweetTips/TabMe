$(document).ready(function(){
    $('.TabMe .TabMe-button').on( 'click', function() {
        var data = $(this).attr('data');
        $('.TabMe .TabMe-tab').hide();
        $('.TabMe #'+data).show('slow');
    });
});
