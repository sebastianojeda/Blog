//readmore tag
$('.content-box-1').readmore({
  speed: 75,
  maxHeight: 100
});

$('.content-box-1').readmore({
  afterToggle: function(trigger, element, expanded) {
    if(! expanded) { // The "Close" link was clicked
      $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
    }
  }
});