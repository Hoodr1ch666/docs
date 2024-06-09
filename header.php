<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
   <meta charset="<?php bloginfo('charset');?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>

   <title>Главна</title>
</head>

<body>
   <header class="header">
      <div class="container">
         <div class="header__inner">
            <div class="header__right">
               <nav>
                  <div class="burger-menu" id="burgerMenu">
                     <div class="bar"></div>
                     <div class="bar"></div>
                     <div class="bar"></div>
                  </div>
                  <ul class="nav-links" id="navLinks">
                     <li><a href="index.php">Главная</a></li>
                     <li><a href="#">Отзывы</a></li>
                     <li><a href="innovations.php">Инновации</a></li>
                     <li><a href="#">Контакты</a></li>
                     <div class="header__social social">
                        <ul class="social__list">
                           <a class="social__link" href="#">
                              <img src="<?php bloginfo('template_url'); ?>/assets/img/icon svg/phone.svg" alt="">
                           </a>
                           <a class="social__link" href="#">
                              <img src="<?php bloginfo('template_url'); ?>/assets/img/icon svg/hot_phone.svg" alt="">
                           </a>
                           <a class="social__link" href="#">
                              <img src="<?php bloginfo('template_url'); ?>/assets/img/icon svg/telegram.svg" alt="">
                           </a>
                        </ul>
                     </div>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </header>