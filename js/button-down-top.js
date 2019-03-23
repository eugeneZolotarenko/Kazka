// (function() {
//     'use strict';
  
//     var btnScrollDown = document.querySelector('#scroll_down');
  
//     function scrollDown() {
//       var windowCoords = document.documentElement.clientHeight;
//       (function scroll() {
//         if (window.pageYOffset < windowCoords) {
//           window.scrollBy(0, 10);
//           setTimeout(scroll, 0);
//         }
//         if (window.pageYOffset > windowCoords) {
//           window.scrollTo(0, windowCoords);
//         }
//       })();
//     }
  
//     btnScrollDown.addEventListener('click', scrollDown);
//   })();

$(document).ready(function() {
  $('#scroll_down').click(function(event) {
    event.preventDefault();
    var n = $(document).height();
    $('html, body').animate({ scrollTop: 600 }, 400);
});
});


  function up() {  
    var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);  
  if(top > 0) {  
    window.scrollBy(0,((top+100)/-10));  
    t = setTimeout('up()',30);  
  } else clearTimeout(t);  
  return false;  
  } 