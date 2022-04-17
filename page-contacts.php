<?php 
   /* Template name: contacts */
   get_header(); 
?>
   <main class="main">
      <!-- Секция контакты -->
      <section class="section">
         <div class="container">
            <div class="section__heading">
               <h1 class="section__title">Наши контакты</h1>
            </div>
            <div class="section__content section__content_fix">
               <img src="<?php bloginfo('template_url'); ?>/assets/images/contacts.jpg" alt="contacts" class="section__img section__img_fix">
               <div class="contacts">
                  <p class="contacts__about-us">Дошкольное образование – одно из наиболее перспективных направлений развития современного образования.</p>
                  <a href="tel:89003470173" class="phone link">Телефон: 89003470173</a>
                  <p class="contact__email">Электронная почта: bigben39@edu.klgd.ru</p>
                  <address class="contact__address">Адресс: 236044, Калининград, ул. Николая Карамзина, д. 6 (корпус1); 236029, ул. Л. Иванихиной, дом №9 (корпус 2)</address>
               </div>
            </div>
         </div>
      </section>
   </main>
   <?php get_footer(); ?> 