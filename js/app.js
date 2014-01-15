$( document ).ready(function() {
    console.log( "ready!" );
  //sub-menu
  $('.sub-menu').parent().addClass('has-child');
  $('.has-child').mouseenter(function() { 
	  $(this).children('.sub-menu').fadeIn();
  });
   $('.has-child').mouseleave(function() { 
	  $(this).children('.sub-menu').fadeOut();
  }); 	 	
  $('.flexslider').flexslider();
  $(".fancybox").fancybox({
    helpers: {overlay:{locked: false}},
    arrows:false
  });
  // product flexslider
 $('.products-flex').flexslider({
    animation: "fade",
    slideshow: false,
    directionNav: false,
    controlNav: "thumbnails"
  });

   $("div.zoom").easyZoom({
    selector: {
      preview: "#preview-zoom",
      window: "#window-zoom"
    }       
  });

  // MAIN BANNER DROPDOWN MENU

  $('.tools').click(function(){
    if($('.tools-dropdown').hasClass("down")) {
      $('.tools-dropdown').slideUp();
      $('.tools-dropdown').removeClass("down");
    } else {
      $('.tools-dropdown').slideDown();
      $('.tools-dropdown').addClass("down");
    };
  });

  // PRODUCTS PAGE

 // var firstLink = $('#tools-list li a')[0];
 // var allProductsDiv = $('.all-products');
 // $(firstLink).addClass('active');
 // $(allProductsDiv).css('display', 'block');

  //$('#tools-list li a').each(function(indexOne, listItem){
  //  $(listItem).click(function(){
      // window.scrollTo(0, 150);

      // Highlight active list item
   //   $('#tools-list li a').each(function(indexTwo, subListItem){
   //     if(subListItem == listItem) {
   //       $(listItem).addClass("active")
    //    } else if($(subListItem).hasClass("active")) {
     //     $(subListItem).removeClass("active");
      //  };
     // });

      // Show a div
      //var itemId = $(listItem).attr("id");
      //console.log(itemId);
      //if(itemId == "features") {
      //  $('#products-wrapper').addClass("features-background");
      //} else if($('#products-wrapper').hasClass("features-background")) {
      //  $('#products-wrapper').removeClass("features-background");
      //};

     // if(itemId == "dealers") {
     //   $('#products-wrapper').addClass("dealers-background");
     // } else if($('#products-wrapper').hasClass("dealers-background")) {
     //   $('#products-wrapper').removeClass("dealers-background");
      //};

      //$('.products-content').each(function(){
       // if($(this).hasClass(itemId)) {
        //  $(this).css('display', 'block');
        //} else {
        //  $(this).css('display', 'none');
       // };
     // });
    //});
  //});

  //$('.products-list a').each(function(index, productLink){
  //  $(productLink).click(function(){
  //    window.scrollTo(0, 150);
   //   var productId = $(this).attr("id");
     // console.log(productLink);
      //$('.products-content').each(function(){
      //  if($(this).hasClass(productId)) {
        //  $(this).css('display', 'block');
        //} else {
          //$(this).css('display', 'none');
        //};
      //})
    //});
  //});

  //$(".back-to-products").click(function(){
    // window.scrollTo(0, 0);
    //$('.products-content').each(function(){
      //if($(this).hasClass("all-products")) {
       // $(this).css('display', 'block');
      //} else {
       // $(this).css('display', 'none');
      //};
    //})
  //});
});
