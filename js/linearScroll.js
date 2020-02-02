
$(document).ready(function () {
  $('#scrollit').click(function() {
    $('#theTop').fadeIn(1000);
    $('html, body').animate({ scrollTop:$('#theTop').offset().top - 100 }, 1000, 'linear');
  });
});
