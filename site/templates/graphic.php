<?php snippet('header') ?>
<div class="wrap">
  <div class="photo-stage">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid">
            <?php foreach($page->images()->sortBy('sort', 'asc') as $file): ?>
              <?php $dimensions = $file->dimensions(); ?>
               <figure class="grid-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo $file->url() ?>" itemprop="contentUrl" data-size="<?php echo $dimensions->width() . 'x' . $dimensions->height() ?>">
                    <img class="img-responsive" src="<?php echo $file->url() ?>" itemprop="thumbnail" alt="Image description" />
                </a>
                <figcaption class="hidden" itemprop="<?php echo $file->caption(); ?>">
                  <?php echo $file->caption(); ?>
                </figcaption>
              </figure>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php snippet('photoswipe') ?>
<?php snippet('footer') ?>
