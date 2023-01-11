$(document).ready(function () {
  $('#autoWidth').lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function () {
      $('#autoWidth').removeClass('cs-hidden');
    },
  });
});

$(function () {
  $('#add_post').submit(function (e) {
    var form = $(this);
    var url = form.attr('action');
    e.preventDefault();
    $.ajax({
      type: 'post',
      url: url,
      data: $('#add_post_form').serialize(),
      dataType: 'json',
      success: function () {
        console.log(data);
      },
    });
  });
});
