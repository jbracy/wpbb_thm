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
