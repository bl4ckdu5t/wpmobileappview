<!doctype html>
<html lang="en" data-plugin="">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <title><?php wp_title(); ?></title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
  <script src="src/js/prefixfree.min.js"></script>
</head>
<body <?php body_class(); ?>>
  <nav class="nav">
    <ul>
      <li><a href="">Entertainment</a></li>
      <li><a href="">News</a></li>
      <li><a href="">Education</a></li>
      <li><a href="">Editorial</a></li>
      <li><a href="">Lifestyle</a></li>
      <li><a href="">Politics</a></li>
      <li><a href="">Romance</a></li>
      <li><a href="">Podcasts</a></li>
      <li><a href="">Sports</a></li>
    </ul>
  </nav>
  <div id="page">
    <header class="header">
      <span class="header__menu" id="js-navToggle">
        <svg id="icon-menu" viewBox="0 0 1024 1024">
        	<path d="M128 213.333h768q17.667 0 30.167 12.5t12.5 30.167-12.5 30.167-30.167 12.5h-768q-17.667 0-30.167-12.5t-12.5-30.167 12.5-30.167 30.167-12.5zM128 725.333h768q17.667 0 30.167 12.5t12.5 30.167-12.5 30.167-30.167 12.5h-768q-17.667 0-30.167-12.5t-12.5-30.167 12.5-30.167 30.167-12.5zM128 469.333h768q17.667 0 30.167 12.5t12.5 30.167-12.5 30.167-30.167 12.5h-768q-17.667 0-30.167-12.5t-12.5-30.167 12.5-30.167 30.167-12.5z"></path>
        </svg>
      </span>
      <img src="src/img/logo.png" class="header__logo" alt="" />
    </header>
