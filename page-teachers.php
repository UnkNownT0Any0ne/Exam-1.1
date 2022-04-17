<?php 
   /* Template name: teachers */
   get_header(); 
?>
   <main class="main">
      <!-- Секция информация о преподавателях-->
      <section class="section">
         <div class="container">
            <div class="section__heading">
               <h1 class="section__title">Наши преподаватели</h1>
            </div>
            <div class="section__content">
               <!-- Преподаватели -->
               <div class="teachers">
                  <!-- Преподаватель -->
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
   </main>
<?php get_footer(); ?>   