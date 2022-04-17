<?php 
   /* Template name: news */
   get_header(); 
?>
   <main class="main">
      <!-- Секция новости -->
      <section class="section">
         <div class="container">
            <div class="section__heading">
               <h1 class="section__title">Новости</h1>
            </div>
            <div class="section__content">
               <!-- Новости -->
               <div class="news">
                  <!-- Новость -->
                  <?php
                     global $post;

                     $myposts = get_posts([
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
                              <strong class="new__date"><?php the_time('j F Y') ?></strong>
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