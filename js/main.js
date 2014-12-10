//readmore tag
$('article').readmore({
  speed: 75,
  maxHeight: 500
});

$('article').readmore({
  afterToggle: function(trigger, element, expanded) {
    if(! expanded) { // The "Close" link was clicked
      $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
    }
  }
});


//All of this code goes to my hamburger.//
(function(){
    var $mainWrapper = $("#main-wrapper");

    $('.menu-icon').click(function(){
        $(this).toggleClass('active');
        $mainWrapper.toggleClass('active');
    });


})();


$(".nav-btn").click(function(){
      $("#sidebar").toggleClass("active");
      $("#content").toggleClass("active");
      $(".nav-btn").toggleClass("active");
});