jQuery(document).foundation();

jQuery('.title-bar').click(function () {
  if (jQuery('#mobile-menu').width() < 250) {
    jQuery('.is-drilldown').css('max-width', '100%');
    jQuery('#mobile-menu').width(250);
    jQuery('.is-drilldown').width('100%');
  } else {
    jQuery('#mobile-menu').width(0);
  }
});

function closeMobileNav() {
  jQuery('#mobile-menu').width(0);
}

jQuery('#comments-button').click(function () {
  jQuery('#comments').toggle(500);
});

jQuery('.children').each(function () {
  jQuery(this).appendTo(jQuery(this).prev());
});

jQuery('iframe').each(function () {
  jQuery(this).wrap('<div class="responsive-embed"></div>');
});

var imgWidth = jQuery('.gallery-icon img').css('width');
jQuery('figure').css('width', imgWidth);

jQuery('.display_archive > .campaign').contents().filter(function () {
    return this.nodeType === 3;
  }).remove();

jQuery('section.widget_facebook_likebox').parent().attr('style', 'text-align: center');
