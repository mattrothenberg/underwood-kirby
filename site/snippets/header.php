<!DOCTYPE html>
<html lang="en" class="<?php echo $page->slug() ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link rel="icon" type="image/ico" href="<?php echo url('assets/images/favicon.ico') ?> ">
  <meta property="og:title" content="Alison Underwood" />
  <meta property="og:description" content="Artist / Graphic Designer / Student based in New York City" />
  <meta property="og:image" content="<?php echo url('assets/images/raw-material-fb.png') ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:width" content="300" />
  <meta property="og:image:height" content="300" />
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <?php echo css('assets/vendor/photoswipe/photoswipe.css') ?>
  <?php echo css('assets/vendor/photoswipe/default-skin/default-skin.css') ?>
  <?php echo css('assets/css/main.css') ?>

</head>
<body>

  <div class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo url() ?>">
          <svg width="328" height="328" viewBox="0 0 328 328"><title>Logo</title><g fill="none" fill-rule="evenodd"><path id="rectangle-bg" fill="#4A4A4A" d="M0 0h328v328H0z"></path><path d="M148.397 228.442c-22.18 0-36.368-10.6-36.368-26.91 0-16.96 13.7-26.582 40.118-28.213l45.99-2.936v14.188c0 25.28-21.037 43.87-49.74 43.87zm-6.034 24.626c24.626 0 46.643-12.557 56.59-32.128h.653v30.498h26.91V130.754C226.516 96.18 199.77 74 158.183 74c-36.858 0-65.724 22.67-66.54 52.35h27.236c3.424-16.634 18.59-27.072 38.976-27.072 25.93 0 40.283 12.07 40.283 33.922v14.678l-49.253 2.935C106.157 153.423 83 171.2 83 201.37c0 31.15 23.647 51.698 59.363 51.698z" fill="#FFF"></path></g></svg>
        </a>
      </div>
      <?php snippet('menu') ?>
    </div>
  </div>
