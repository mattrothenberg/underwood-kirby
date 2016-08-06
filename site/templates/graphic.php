<?php snippet('header') ?>
<div class="wrap">
  <div class="photo-stage">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid">
            <?php foreach($page->images()->sortBy('sort', 'asc') as $file): ?>
              <div class="grid-item">
                <img class="img-responsive" src="<?php echo $file->url() ?>" alt="">
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php snippet('footer') ?>
