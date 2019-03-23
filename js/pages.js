$(document).ready(function() {
// Schedule Page
  if ($('#first-subject-1').is(':empty')) {
    $('.schedule-1-class').hide();
    $('.schedule-nav-1').hide();
  }
  if ($('#first-subject-2').is(':empty')) {
    $('.schedule-2-class').hide();
    $('.schedule-nav-2').hide();
  }
  if ($('#first-subject-3').is(':empty')) {
    $('.schedule-3-class').hide();
    $('.schedule-nav-3').hide();
  }
  if ($('#first-subject-4').is(':empty')) {
    $('.schedule-4-class').hide();
    $('.schedule-nav-4').hide();
  }

  $(function() {
    $('.schedule-nav-calls').click (function() {
      $('html, body').animate({scrollTop: $('section.calls-block').offset().top-100 }, 'slow');
      return false;
    });
    $('.schedule-nav-1').click (function() {
      $('html, body').animate({scrollTop: $('section.schedule-1-class').offset().top-100 }, 'slow');
      return false;
    });
    $('.schedule-nav-2').click (function() {
      $('html, body').animate({scrollTop: $('section.schedule-2-class').offset().top-100 }, 'slow');
      return false;
    });
    $('.schedule-nav-3').click (function() {
      $('html, body').animate({scrollTop: $('section.schedule-3-class').offset().top-100 }, 'slow');
      return false;
    });
    $('.schedule-nav-4').click (function() {
      $('html, body').animate({scrollTop: $('section.schedule-4-class').offset().top-100 }, 'slow');
      return false;
    });
  });
// End Schedule Page
// 
// Team Page
// $('.team').slick();
				

$('.team').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 470,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


$(function() {
  $('.team-nav-1').click (function() {
    $('html, body').animate({scrollTop: $('.admin').offset().top-170 }, 'slow');
    return false;
  });
  $('.team-nav-2').click (function() {
    $('html, body').animate({scrollTop: $('.teachers').offset().top-170 }, 'slow');
    return false;
  });
  $('.team-nav-3').click (function() {
    $('html, body').animate({scrollTop: $('.tuters').offset().top-170 }, 'slow');
    return false;
  });
  $('.team-nav-4').click (function() {
    $('html, body').animate({scrollTop: $('.specialists').offset().top-170 }, 'slow');
    return false;
  });
  $('.team-nav-5').click (function() {
    $('html, body').animate({scrollTop: $('.workers').offset().top-170 }, 'slow');
    return false;
  });
});
// End Team Page

// Vakansii Page
if ($('.vakansii-block li:nth-child(4), .vakansii-block li:nth-child(5), .vakansii-block li:nth-child(6)').is(':empty')) {
  $('.vakansii-block').hide();
  $('.transparency-content').append('<h2 class="exist-vakansii">На даний момент вакансії відсутні</h2>')
}
// if ($('.vakansii-block li').is(':empty')) {
//   $('.vakansii-block li').hide();
// }
// Vakansii Page

});

