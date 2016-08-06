var $grid = $('.grid');

if ( $grid.length > 0 ) {
  $grid.masonry({
    itemSelector: '.grid-item',
    gutter: 25,
    percentPosition: true
  });

  $grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
  });
}
