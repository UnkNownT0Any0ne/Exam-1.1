<?php 
   /* Template name: services */
   get_header(); 
?>
   <main class="main">
      <!-- Секция наши услуги-->
      <section class="section">
         <div class="container">
            <div class="section__heading">
               <h1 class="section__title">Наши услуги</h1>
            </div>
            <div class="section__content">
               <!-- Услуги -->
               <div class="services">
                  <!-- Услуга -->
                  <?php
                     global $post;

                     $myposts = get_posts([
                        'category_name' => 'Услуга'
                     ]);

                     if( $myposts ){
                        foreach( $myposts as $post ){
                           setup_postdata( $post );
                           ?>
                           <div class="service">
                              <strong class="service__name"><?php the_title(); ?></strong>
                              <p class="service__description"><?php the_content(); ?></p>
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
   </main>
<?php get_footer(); ?>  