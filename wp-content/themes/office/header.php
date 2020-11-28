<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo( 'description' ); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="header__contacts">
          <a class="header__phone" href="tel:<?php the_field('header__phone')?>"><?php the_field('header__phone')?></a>
          <a class="header__email" href="#"><?php the_field('header__email')?></a>
          <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#"><?php the_field('header__btn')?></a>
        </div>
      </div>
    </div>
    <div class="header__content">
      <div class="container">
        <div class="header__content-inner">
          <div class="header__logo">
            <a href="#">
              <img src="<?php the_field('header__logo')?>" alt="logo">
            </a>
          </div>
          <nav class="menu">
            <div class="header__btn-menu">
              <span class="icon-bars"></span>
            </div>
            <ul>
              <li><a href="#"><?php the_field('menu-1')?></a></li>
              <li><a href="#"><?php the_field('menu-2')?></a></li>
              <li><a href="#"><?php the_field('menu-3')?></a></li>
              <li><a href="#"><?php the_field('menu-4')?></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>