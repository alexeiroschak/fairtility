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

<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post() ?>

   <div class="container post">
      <img src="<?= get_field('hero_image') ?>" alt="">

      <div class="content">
         <?php the_content() ?>
      </div>
   </div>
   
   
   <?php endwhile ?>
<?php endif ?>

<?php get_footer(); ?>