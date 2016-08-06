<?php snippet('header') ?>

<div class="wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 hero">
        <h1 class="h2 hero-heading">
          <strong>
            <?php echo $page->name() ?>
          </strong>
        </h1>
        <p class="hero-subheading lead">
          <?php echo $page->text()->kirbytext() ?>
        </p>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
