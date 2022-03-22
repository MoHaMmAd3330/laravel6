$(document).ready(function()
{
  $('.carousel').carousel(
    {
    interval: 5000
  });
});

// $(".gear-check").click(function(){
//   $(".color-option").toggle();
// });


// $(window).load(function()
// {
//   $("body").Css("overflow","auto")
//   $(".loading-overlay").fadeOut(1000)

// });

//lodaing screen
$(window).load(function(){
  $(".loading-overlay .sk-folding-cube").fadeOut(2000,function(){
    $(this).parent().fadeOut(1000, function(){
      $(this).remove();
      $("body").css("overflow","auto");      
    });
  });
});

//scroll
$(function(){

  var scrollButton = $("#scroll-up");
  $(window).scroll(function(){
    if ($(this).scrollTop()>= 700)
    {
      scrollButton.fadeIn(500)
     
    }else{
      scrollButton.fadeOut(500)
    
    }
  });
  scrollButton.click(function(){
    $("html,body").animate({scrollTop:0},700)
  });
  var scrolldown = $(".scroll-down");
  $(window).scroll(function(){
   ($(this).scrollTop()>= 500)
  
  });
  scrolldown.click(function(){
    $("html,body").animate({scrollTop:10000},700)
  });
});

$(function(){
  $("html").niceScroll();

  var scrolldown = $(".scroll-down");
  $(window).scroll(function(){
    if ($(this).scrollTop()>= 4500)
    {
      scrolldown.fadeOut(500)
    }else{
      scrolldown.fadeIn(500)

    }
  });
  scrolldown.click(function(){
    $("html,body").animate({scrollTop:10000},700)
  })
});





