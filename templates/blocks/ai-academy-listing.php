<section id="<?= get_field('section_id') ?>" class="block ai-academy-listing">
   <?php 
      $show_all = get_field('show_all');
      if($show_all) {
         $args = array(  
            'post_type' => 'academy',
            'post_status' => 'publish',
            'posts_per_page' => 30, 
            'orderby' => 'date',
            'order' => 'desc'
         );
         $posts = get_posts( $args ); 
      }else{
         $posts = get_field('ai_academy_posts');
      }
   ?>

   <div class="container">
      <?php if($posts): ?>
      <?php foreach( $posts as $post ): 
         $permalink = get_permalink( $post->ID );
         $image = get_field('thumbnail_image', $post->ID);
         $title = get_the_title( $post->ID );
         $description = get_field( 'short_description', $post->ID );
         $categories = get_the_category( $post->ID );
      ?>
         <a class="listing" href="<?php echo esc_url( $permalink ); ?>">
            <img class="img bg-img" src="<?= $image ?>">
            <div class="description">
               <div class="category">
                  <?php 
                     if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );   
                     }
                  ?>
               </div>
            
               <div class="title">
                  <?php echo $title; ?>
               </div>
               <div class="excerpt">
                  <?php echo $description; ?>
               </div>
            </div>
         </a>
      <?php endforeach; ?>
      <?php endif; ?>
   </div>

   <div id="ai-academy-prev-next-nav">
      <div class="btn">
         Prev
      </div>                                 
      <div class="divider"></div>
      <div class="btn">
         Next
      </div>                                 
   </div>

</section>