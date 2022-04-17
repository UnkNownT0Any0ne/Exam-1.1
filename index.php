<?php 
   $services = new WP_Query ([
      'cat' => 7,
      'posts_per_page' => -1
   ]);
   get_header(); 
?>
   <main class="main">
      <!-- Стартовый экран -->
      <section class="section section_background" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/bg/bg.jpg)">
         <div class="container">
            <div class="section__heading">
               <h1 class="section__title">BigBen - Школа английского языка</h1>
            </div>
         </div>
      </section>
      <!-- Секция описания преимуществ -->
      <section class="section">
         <div class="container">
            <div class="section__heading">
               <h2 class="section__title">Наши преимущества</h2>
            </div>
            <div class="section__content section__content_fix">
               <img src="<?php bloginfo('template_url'); ?>/assets/images/benefits.jpg" alt="benefits-img" class="section__img">
               <!-- Преимущества -->
               <ul class="benefits">
                  <li class="benefits__text">Высококвалифицированные преподаватели</li>
                  <li class="benefits__text">Электронная запись</li>
                  <li class="benefits__text">Удобная программа обучения</li>
                  <a href="#" class="btn">Запись на пробное занятие</a>
               </ul>
            </div>
         </div>
      </section>
      <!-- Секция заказа услуги -->
      <section class="section">
         <div class="container">
            <div class="section__heading">
               <h2 class="section__title">Запись на обучение</h2>
            </div>
            <div class="section__content section__content_fix">
               <!-- Форма записи -->
               <img src="<?php bloginfo('template_url'); ?>/assets/images/services/services.jpg" alt="form" class="section__img">
               <div class="form">
                  <input type="text" class="input text-muted" placeholder="Введите ваше ФИО" require>
                  <input type="text" class="input text-muted" placeholder="Введите номер телефона" require>
                  <input type="email" class="input text-muted" placeholder="Введите вашу почту" require>
                  <select name="services-option" class="input" require>
                     <?php if ($services->have_posts()): ?>
                        <?php while($services->have_posts()): $services->the_post(); ?>
                           <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                        <?php endwhile; ?>
                     <?php endif; ?>
                  </select>
                  <input type="date" class="input text-muted" require>
                  <a href="#" class="btn">Отправить</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Секция информация о преподавателях-->
      <section class="section">
         <div class="container">
            <div class="section__heading">
               <h2 class="section__title">Наши преподаватели</h2>
            </div>
            <div class="section__content">
               <!-- Преподаватели -->
               <div class="teachers">
                  <?php
                     global $post;

                     $myposts = get_posts([
                        'category_name' => 'Преподаватель'
                     ]);

                     if( $myposts ){
                        foreach( $myposts as $post ){
                           setup_postdata( $post );
                           ?>
                           <div class="teacher">
                              <?php the_post_thumbnail(
                                 array(380, 250),
                                 array(
                                    'class' => 'teacher__img'
                                 )
                              );?>
                              <strong class="teacher__name"><?php the_title(); ?></strong>
                              <p class="teacher__description"><?php the_content(); ?></p>
                           </div>
                           <?php 
                        }
                     } else {
                        // Постов не найдено
                     }

                     wp_reset_postdata(); // Сбрасываем $post
                  ?>
               </div>
            </div>
         </div>
      </section>
      <!-- Секция новости -->
      <section class="section">
         <div class="container">
            <div class="section__heading">
               <h2 class="section__title">Новости</h2>
            </div>
            <div class="section__content">
               <!-- Новости -->
               <div class="news">
                  <!-- Новость -->
                  <?php
                     global $post;

                     $myposts = get_posts([
                        'numberposts' => 3,
                        'category_name' => 'Новость'
                     ]);

                     if( $myposts ){
                        foreach( $myposts as $post ){
                           setup_postdata( $post );
                           ?>
                           <a href="<?php the_permalink(); ?>" class="new">
                              <?php the_post_thumbnail(
                                 array(400, 270),
                                 array(
                                    'class' => 'new__img'
                                 )
                              );?>
                              <p class="new__text"><?php the_title(); ?></p>
                              <strong class="new__date">Создано: <?php the_time('j F Y'); ?></strong>
                           </a>
                           <?php 
                        }
                     } else {
                        // Постов не найдено
                     }

                     wp_reset_postdata(); // Сбрасываем $post
                  ?>
               </div>
            </div>
         </div>
      </section>
   </main>
<?php get_footer(); ?>