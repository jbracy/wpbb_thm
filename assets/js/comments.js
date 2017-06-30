jQuery(document).foundation();

jQuery('.children').each(function () {
  jQuery(this).appendTo(jQuery(this).prev());
});
