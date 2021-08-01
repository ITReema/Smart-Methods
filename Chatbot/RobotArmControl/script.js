var rangeSlider = function(){
  var slider = $('.slider'), range = $('.slider_range'), value = $('.slider_value');  
  slider.each(function(){
    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });
    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};
rangeSlider();
