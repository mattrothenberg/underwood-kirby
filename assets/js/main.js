var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  gutter: 25,
  percentPosition: true
});

$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});
