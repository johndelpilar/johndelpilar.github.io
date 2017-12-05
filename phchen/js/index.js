$(function() {
  $('.intro').addClass('go');

  $('.reload').click(function() {
    $('.intro').removeClass('go').delay(200).queue(function(next) {
      $('.intro').addClass('go');
      next();
    });

  });
})

$(document).ready(function () {
    setTimeout( function(){
        $('#balloon-display').css("display", "block");
    },4500);
});