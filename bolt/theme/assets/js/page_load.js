$(function(){
  $(window).load(function() {
    //on production change 3000 to 500
    $('.pageloader').fadeOut("slow");
    $("#loading-text").addClass('text-success').html('page loaded');
  })
})