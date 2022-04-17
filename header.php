<!doctype html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php bloginfo('name'); ?></title>
   <?php wp_head(); ?>
</head>
<body>
   <header class="header">
      <div class="container">
         <div class="header__content">
            <button class="hamburger">
					<span class="hamburger__line"></span>
					<span class="hamburger__line"></span>
				</button>
            <a href="<?= home_url(); ?>" class="logo">
               <span class="logo__text">Big</span>
               <span class="logo__text logo__text_red">Ben</span>
            </a>
            <!-- Меню -->
            <nav class="nav">
               <?php 
                  wp_nav_menu(array(
                     'theme_location' => 'header_menu',
                     'container' => 'ul',
                     'menu_class' => 'nav__menu'
                  ));
               ?>
            </nav>
            <div class="header__contants">
               <a href="tel:89003470173" class="link phone">89003470173</a>
            </div>
         </div>
         <div class="header__footer">
            <nav class="nav nav_mobile">
               <?php
                  wp_nav_menu(array(
                     'theme_location' => 'header_menu',
                     'container' => 'ul',
                     'menu_class' => 'nav__menu'
                  ));
               ?>
				</nav>
			</div>
      </div>
   </header>