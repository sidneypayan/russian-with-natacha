<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header <?php if (is_single() or is_home()) echo 'header-podcast header--purple' ?>">
    <div class="container">
      <nav class="header__nav">
        <div class="header__nav-left">
          <a class="header__logo" href="<?= site_url(); ?>"><i class="fas fa-microphone-alt fa-2x"></i></a>
          <span>Learn With Natasha</span>
        </div>
        <ul class="header__nav-right header__nav-right--white">
          <li><a href="<?= site_url(); ?>" class="current">Home</a></li>
          <li><a href="<?= site_url('#lesson'); ?>">Lesson</a></li>
          <li><a href="<?= site_url('#newsletter'); ?>">Subscribe</a></li>
        </ul>
      </nav>
    </div>
  </header>