<section id="<?= get_field('section_id') ?>" class="block ai-academy-listing">
   <?php
      $posts = get_field('ai_academy_posts');
      if( $posts ): 
   ?>
      <div class="container">
         <?php foreach( $posts as $post ): 
            $permalink = get_permalink( $post->ID );
            $image = get_field('thumbnail_image', $post->ID);
            $title = get_the_title( $post->ID );
            $custom_field = get_field( 'short_description', $post->ID );
            $categories = get_the_category( $post->ID );
         ?>
            <a class="listing" href="<?php echo esc_url( $permalink ); ?>">
               <div class="img bg-img" style="background-image:url(<?= $image ?>)"></div>
               <div class="description">
                  <div class="category">
                     <?php 
                        if ( ! empty( $categories ) ) {
                           echo esc_html( $categories[0]->name );   
                        }
                     ?>
                  </div>
               
                  <div class="title">
                     <?php echo esc_html( $title ); ?>
                  </div>
                  <div class="excerpt">
                     <?php echo esc_html( $custom_field ); ?>
                  </div>
               </div>
            </a>
         <?php endforeach; ?>
      </div>
   <?php endif; ?>
</section>