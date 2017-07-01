jQuery(document).foundation();

jQuery('#comments-button').click(function () {
  jQuery('#comments').toggle(500);
});


jQuery('.children').each(function () {
  jQuery(this).appendTo(jQuery(this).prev());
});
