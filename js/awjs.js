(function ($) {

Drupal.behaviors.arkyepec = {
	attach: function(context, settings) {

if (context == document) {

var $body = document.body;

var $bannerText =  document.getElementsByClassName('banner-text');
var $children =  document.getElementsByClassName('children');
var $crumbs =  document.getElementsByClassName('crumbs');
var $dropdown =  document.getElementsByClassName('dropdown-box');
var $dtoggle =  document.getElementsByClassName('data-toggle');
var $expanded =  document.getElementsByClassName('expanded');
var $menudrop =  document.getElementsByClassName('menu-drop');
var $programasBox =  document.getElementsByClassName('menu-programas');
var $toggle = document.getElementsByClassName('toggle');

var $menu_paes = document.getElementsByClassName('menu-paes');

var $switch =  document.getElementsByClassName('switch');
var $switch_lang = document.getElementsByTagName('html')[0].getAttribute("lang"); 

var $block_out =  document.getElementsByClassName('block-outside');	
var $block_in =  document.getElementsByClassName('block-inside');

var $tagA = document.getElementsByTagName('a');
var $tagI = document.getElementsByTagName('i');

$($switch).find($tagI).text($switch_lang);

// DROPDOWN
$.each($dropdown, function() {	
	$(this)
	    .find($block_out)
	    .click(function (e) { 
	      	e.stopPropagation(); 
	 	});  
}); 

// DROPDOWN MENU
var menudrop_expanded = $($menudrop).find($expanded);
$.each($menudrop, function() {
	$(this)
		.children()
		.find($dtoggle)
		.attr('data-toggle', 'dropdown')	
	$(this)
	    .find($children)
	    .click(function (e) { 
	      	e.stopPropagation(); 
	 	});  
});

//TOGGLES
$($toggle).click(function (e) {
	$($body).toggleClass('toggle-open');
	e.stopPropagation();
	e.preventDefault();
}); 

//PROGRAMAS MENU
$.each($programasBox, function() {
	$(this).find('.drop-title span').text($(this).find('a.active-trail').text());
});

//BROCHURE
var $brochure = document.getElementsByClassName('brochure');
$($brochure).find('a').prepend('<i class="fa fa-file-text-o"></i>');
$('[href*="pdf"]').attr('target', '_blank');
$('[href*="pdf"]').attr('rel', 'noreferer');

//SCROLL ANIMATE
var clickScroll = document.getElementsByClassName('click-scroll');

$(clickScroll).bind('click', function(event) {
  var $anchor = jQuery(this);
  $('html, body').stop().animate({
     scrollTop: jQuery($anchor.attr('href')).offset().top
  }, 1500);
  event.preventDefault();
});

// STICKY
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('body');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > 250) { //offset.top
          $($body).addClass('is-heights');
       } else {
          $($body).removeClass('is-heights');
       }
   });
   $(document).trigger("scroll");
});

$($menu_paes).find('.nav').removeClass('nav nav-pills nav-stacked nav-bracket').addClass('children');

$(".mdiv-1").prependTo('.menu-escuela > .children');
$(".mdiv-2").prependTo('.menu-mba > .children');
$(".mdiv-3").prependTo('.menu-maestrias > .children');
$(".mdiv-4").prependTo('.menu-paes > .children');
$(".mdiv-5").prependTo('.menu-diplomados > .children');

$(".wfupn input[type='email']").attr('placeholder', 'Email');}

}}

})(jQuery);