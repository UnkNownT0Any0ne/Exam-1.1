<?php 
   /* Template name: schools */
   get_header(); 
?>
   <main class="main">
      <!-- Секция школы -->
      <section class="section">
         <div class="container">
            <div class="section__heading">
               <h1 class="section__title">Наши школы</h1>
            </div>
            <div class="section__content">
               <!-- Школы -->
               <div class="schools">
                  <?php
                     global $post;

                     $myposts = get_posts([
                        'category_name' => 'Школа'
                     ]);

                     if( $myposts ){
                        foreach( $myposts as $post ){
                           setup_postdata( $post );
                           ?>
                           <div class="school">
                              <?php the_post_thumbnail(
                                 array(400, 270),
                                 array(
                                    'class' => 'school__img'
                                 )
                              );?>
                              <p class="school___name"><?php the_title(); ?></p>
                              <strong class="school__description"><?php the_content() ?></strong>
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