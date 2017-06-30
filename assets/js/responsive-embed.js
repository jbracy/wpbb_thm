jQuery(document).foundation();

if (jQuery('iframe').parent().hasClass() == 'post') {
  jQuery('iframe').wrap('<p class="responsive-embed"></p>');
}
else {
  jQuery('iframe').parent().addClass('responsive-embed');
}

var imgWidth = jQuery('.gallery-icon img').css('width');
jQuery('figure').css('width', imgWidth);
