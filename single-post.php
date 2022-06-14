<?php get_header(); ?>

<div class="block hero-headline">
    <div class="container">
        <h1 class="has-line">            
            <?php the_title() ?>
        </h1>
    </div>
</div>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>
<?php endif ?>
<?php get_footer(); ?>