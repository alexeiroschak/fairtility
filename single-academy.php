<?php get_header(); ?>

<div class="container">
   <div class="category">
      <?php 
      $categories = get_the_category();
      
      if ( ! empty( $categories ) ) {
         echo esc_html( $categories[0]->name );   
      }
      ?>
   </div>
</div>

<div class="block hero-headline">
   <div class="container">
      <h1>
         <?php the_title() ?>
      </h1>
   </div>
</div>

<div class="container post">
   <img src="<?= get_field('hero_image') ?>" alt="">

   <div class="content">
      <?php the_content() ?>
   </div>
   
   <div class="footer">
      <?php
         $share_url = get_permalink();
      ?>

      <div class="socials ai-academy">
         <div class="title">Share:</div>
         <div class="ai-academy-copy-link">
            <i class="fas fa-link"></i>
         </div>
         <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $share_url ?>" target="_blank">
            <i class="fab fa-linkedin-in social-click"></i>
         </a>
         <a href="https://twitter.com/intent/tweet?url=<?= $share_url ?>" target="_blank">
            <i class="fab fa-twitter social-click"></i>
         </a>
         <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $share_url ?>" target="_blank">
            <i class="fab fa-facebook-f social-click"></i>
         </a>
      </div>
   </div>
</div>


<?php get_footer(); ?>