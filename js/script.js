$(document).ready(function(){

    //Hide Main

    $('#payment_form').hide();

    //Pay

    $('#answer').click(function() {
      $('#payment_form').slideDown('fast', function() {
        // Animation complete.
      });
	      
    });

});
