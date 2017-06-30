jQuery(document).foundation();

jQuery('iframe').each(function () {
  jQuery(this).wrap('<div class="responsive-embed"></div>');
});

var imgWidth = jQuery('.gallery-icon img').css('width');
jQuery('figure').css('width', imgWidth);
