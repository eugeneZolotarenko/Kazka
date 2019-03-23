
$(document).ready(function(){
    $(".m-bar a").removeClass("bar")
    $(".bar")
    $(".menu li:nth-child(1) .bar").click(function(){
        $(this).toggleClass("bar-click");
        $(".menu li:nth-child(2) .bar").removeClass("bar-click");
        $(".menu-2 li:nth-child(2) .bar").removeClass("bar-click");
        $(".menu-2 li:nth-child(4) .bar").removeClass("bar-click");

        $(".menu li:nth-child(1) .m-bar").toggleClass("animate-target-red");
        $(".menu li:nth-child(2) .m-bar").removeClass("animate-target-orange");
        $(".menu-2 li:nth-child(2) .m-bar").removeClass("animate-target-green");
        $(".menu-2 li:nth-child(4) .m-bar").removeClass("animate-target-blue");
    });
    $(".menu li:nth-child(2) .bar").click(function(){
        $(this).toggleClass("bar-click");
        $(".menu li:nth-child(1) .bar").removeClass("bar-click");
        $(".menu-2 li:nth-child(2) .bar").removeClass("bar-click");
        $(".menu-2 li:nth-child(4) .bar").removeClass("bar-click");

        $(".menu li:nth-child(2) .m-bar").toggleClass("animate-target-orange"); 
        $(".menu li:nth-child(1) .m-bar").removeClass("animate-target-red");
        $(".menu-2 li:nth-child(2) .m-bar").removeClass("animate-target-green");
        $(".menu-2 li:nth-child(4) .m-bar").removeClass("animate-target-blue");
    });
    $(".menu-2 li:nth-child(2) .bar").click(function(){
        $(this).toggleClass("bar-click");
        $(".menu li:nth-child(1) .bar").removeClass("bar-click");
        $(".menu li:nth-child(2) .bar").removeClass("bar-click");
        $(".menu-2 li:nth-child(4) .bar").removeClass("bar-click");

        $(".menu-2 li:nth-child(2) .m-bar").toggleClass("animate-target-green");
        $(".menu li:nth-child(1) .m-bar").removeClass("animate-target-red");
        $(".menu li:nth-child(2) .m-bar").removeClass("animate-target-orange");
        $(".menu-2 li:nth-child(4) .m-bar").removeClass("animate-target-blue"); 
    });
    $(".menu-2 li:nth-child(4) .bar").click(function(){
        $(this).toggleClass("bar-click");
        $(".menu li:nth-child(1) .bar").removeClass("bar-click");
        $(".menu-2 li:nth-child(2) .bar").removeClass("bar-click");
        $(".menu li:nth-child(2) .bar").removeClass("bar-click");

        $(".menu-2 li:nth-child(4) .m-bar").toggleClass("animate-target-blue");
        $(".menu li:nth-child(1) .m-bar").removeClass("animate-target-red"); 
        $(".menu li:nth-child(2) .m-bar").removeClass("animate-target-orange");
        $(".menu-2 li:nth-child(2) .m-bar").removeClass("animate-target-green");
    });

    var isResizeble = false;
    if(!isResizeble) {
       $("<a class=only-mobile href=/school>Про Шкільний Підрозділ</a>").prependTo(".menu li:nth-child(1) .m-bar");
       $("<a class=only-mobile href=/information>Інформація про Заклад</a>").prependTo(".menu li:nth-child(2) .m-bar");
       $("<a class=only-mobile href=/prozorist>Інформаційна Відкритість</a>").prependTo(".menu-2 li:nth-child(2) .m-bar");
       $("<a class=only-mobile href=/dytiachyi-sadochok>Про Дошкільний Підрозділ</a>").prependTo(".menu-2 li:nth-child(4) .m-bar");
    isRezeble = true;
}

// slide mobile-menu
    function slideMenu() {
        var menu = $('.navigation-line');
        if (menu.hasClass('slide-navigation-line')) {
          menu.removeClass('slide-navigation-line').addClass('slide-reverse-navigation-line');
        } 
        else if (menu.hasClass('slide-reverse-navigation-line')) {
          menu.removeClass('slide-reverse-navigation-line').addClass('slide-navigation-line');
        } 
        else {
          menu.addClass('slide-navigation-line');
        }
      };

      $(document).ready(function() {
        $('.burger-container').on("click", function() {
            slideMenu();
        });
      });

      if ($(window).width() <= '949'){
        $(".menu-item-has-children .bar").removeAttr('href', '/');
        }
      $(window).on('scroll resize' , Scroll_Action)
});


function Scroll_Action(){
    if ($(window).width() <= '949'){
    $(".menu-item-has-children .bar").removeAttr('href', '#');
    }
    else{
        $("#menu-item-35 .bar").attr('href', '/school');
        $("#menu-item-36 .bar").attr('href', '/information');
        $("#menu-item-51 .bar").attr('href', '/prozorist');
        $("#menu-item-53 .bar").attr('href', '/dytiachyi-sadochok/');
    }
}
    // Button
function myFunction(x) {
x.classList.toggle("change-burger");
}