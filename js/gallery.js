
$(document).ready(function() {
$('#all').on('click', function() {
  var $this = $(this);
  $('.category-item').removeClass('active');
  $this.addClass('active');
  $('.kids-item').removeClass('hide');
});

// Show landscape
$('#school').on('click', function() {
  var $this = $(this);
  $('.category-item').removeClass('active');
  $this.addClass('active');
  $('.school').removeClass('hide');
  $('.kinder').addClass('hide');
});
// Show urban
$('#kinder').on('click', function() {
  var $this = $(this);
  $('.category-item').removeClass('active');
  $this.addClass('active');
  $('.kinder').removeClass('hide');
  $('.school').addClass('hide');
});
// if($('.day li:nth-child(1)').html() == ' '){
//   $('.schedule').css({'display': 'none'});
// } else {
//   $('.schedule').css({'display': 'grid'});
// }

});

$(document).ready(function() {
  $('.kids-item').magnificPopup({
      type:'image',
      gallery: {
          enabled: true
      }
  });
});
