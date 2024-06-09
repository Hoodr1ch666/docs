<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
   <main>
      <section class="hero">
         <div class="container">
            <div class="hero__inner">
               <div class="hero__right">
                  <h1 class="hero__title">Продвинутые услуги в сфере юриспруденции</h1>
                  <a class="hero__link" href="#">Оставить заявку</a>
               </div>
               <div class="hero__left">
                  <form class="hero__form form" action="">
                     <h2 class="form__title">У вас возникли вопросы?</h2>
                     <p class="form__text">Получи консультацию</p>
                     <div class="form__group">
                        <input class="form__input" placeholder="Имя" type="text" id="name" name="name" required
                           minlength="4" maxlength="11" size="10">
                     </div>
                     <div class="form__group">
                        <input class="form__input" placeholder="Телефон" type="tel" id="phone" name="phone" required />
                     </div>
                     <button type="submit" class="form__btn">Отправить</button>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <section class="service">
         <div class="container">
            <div class="service__inner">
               <ul class="service__list">
                  <li class="service__item">
                     <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                     <h3 class="service__title">Апостиль</h3>
                     <div class="service__line"></div>
                     <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                        cursus hac consequat mauris.</p>
                     <a class="service__link" href="document.html">Читать дальше</a>
                  </li>
                  <li class="service__item">
                     <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                     <h3 class="service__title">Международные браки</h3>
                     <div class="service__line"></div>
                     <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                        cursus hac consequat mauris.</p>
                     <a class="service__link" href="document.html">Читать дальше</a>
                  </li>
                  <li class="service__item">
                     <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                     <h3 class="service__title">Справка о несудимости</h3>
                     <div class="service__line"></div>
                     <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                        cursus hac consequat mauris.</p>
                     <a class="service__link" href="document.html">Читать дальше</a>
                  </li>
                  <li class="service__item">
                     <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                     <h3 class="service__title">Получение гражданства Украины</h3>
                     <div class="service__line"></div>
                     <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                        cursus hac consequat mauris.</p>
                     <a class="service__link" href="document.html">Читать дальше</a>
                  </li>
                  <li class="service__item">
                     <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                     <h3 class="service__title">Открытие Банковского счёта для иностранцев</h3>
                     <div class="service__line"></div>
                     <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                        cursus hac consequat mauris.</p>
                     <a class="service__link" href="document.html">Читать дальше</a>
                  </li>
                  <li class="service__item">
                     <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                     <h3 class="service__title">Банкротство физ. лиц и юр лиц</h3>
                     <div class="service__line"></div>
                     <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                        cursus hac consequat mauris.</p>
                     <a class="service__link" href="document.html">Читать дальше</a>
                  </li>
                  <button class="service__btn" id="toggleButton">Показать больше</button>
                  <ul class="service__list" id="content">
                     <li class="service__item">
                        <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                        <h3 class="service__title">Эмиграция</h3>
                        <div class="service__line"></div>
                        <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                           cursus hac consequat mauris.</p>
                        <a class="service__link" href="document.html">Читать дальше</a>
                     </li>
                     <li class="service__item">
                        <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                        <h3 class="service__title">Уголовные дела</h3>
                        <div class="service__line"></div>
                        <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                           cursus hac consequat mauris.</p>
                        <a class="service__link" href="document.html">Читать дальше</a>
                     </li>
                     <li class="service__item">
                        <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                        <h3 class="service__title">Онлайн консультация</h3>
                        <div class="service__line"></div>
                        <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                           cursus hac consequat mauris.</p>
                        <a class="service__link" href="document.html">Читать дальше</a>
                     </li>
                     <li class="service__item">
                        <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                        <h3 class="service__title">Стоимость Открытия компании в ОАЭ</h3>
                        <div class="service__line"></div>
                        <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                           cursus hac consequat mauris.</p>
                        <a class="service__link" href="document.html">Читать дальше</a>
                     </li>
                     <li class="service__item">
                        <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                        <h3 class="service__title">Как открыть Счёт в Украине иностранным гражданам</h3>
                        <div class="service__line"></div>
                        <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                           cursus hac consequat mauris.</p>
                        <a class="service__link" href="document.html">Читать дальше</a>
                     </li>
                     <li class="service__item">
                        <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                        <h3 class="service__title">Лингвистическая экспертиза</h3>
                        <div class="service__line"></div>
                        <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar mi
                           cursus hac consequat mauris.</p>
                        <a class="service__link" href="document.html">Читать дальше</a>
                     </li>
                        <li class="service__item">
                           <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                           <h3 class="service__title">Защита в судах</h3>
                           <div class="service__line"></div>
                           <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar
                              mi cursus hac consequat mauris.</p>
                           <a class="service__link" href="document.html">Читать дальше</a>
                        </li>
                        <li class="service__item">
                           <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                           <h3 class="service__title">Перевод документов</h3>
                           <div class="service__line"></div>
                           <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar
                              mi cursus hac consequat mauris.</p>
                           <a class="service__link" href="document.html">Читать дальше</a>
                        </li>
                        <li class="service__item">
                           <img class="service__img" src="<?php bloginfo('template_url'); ?>/assets/img/pasport.jpg" alt="">
                           <h3 class="service__title">Подбор адвоката</h3>
                           <div class="service__line"></div>
                           <p class="service__text">Lorem ipsum dolor sit amet consectetur. Lectus accumsan nullam pulvinar
                              mi cursus hac consequat mauris.</p>
                           <a class="service__link" href="document.html">Читать дальше</a>
                        </li>
                  </ul>
                  </ul>
            </div>
         </div>
      </section>
      <section class="form__bottom">
         <div class="form__bottom">
            <form class="form__bottom form" action="">
               <h2 class="form__title">У вас возникли вопросы?</h2>
               <p class="form__text">Получи консультацию</p>
               <div class="form__group">
                  <input class="form__input" placeholder="Имя" type="text" id="name" name="name" required
                     minlength="4" maxlength="11" size="10">
               </div>
               <div class="form__group">
                  <input class="form__input" placeholder="Телефон" type="tel" id="phone" name="phone" required />
               </div>
               <button type="submit" class="form__btn">Отправить</button>
            </form>
         </div>
      </section>
   </main>
<?php get_footer(); ?>

