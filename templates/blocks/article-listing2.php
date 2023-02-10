<section id="<?= get_field('section_id') ?>" class="block article-listing2">
    <div class="container">

        

        <?php
            $headline = get_field('headline');
            $category = get_field('category');
            $query = new WP_Query([
                'post_type' => 'post',
                'category_name' => $category->slug,
                
            ]);

            $count = 0;
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
        ?>
            <div class="article-listing2--row">
                <div class="article-listing2--row--left">
                    <?php if ($count == 0) : ?>
                        <h2><?= $headline ?></h2>
                    <?php endif ?>
                </div>
                <div class="article-listing2--row--right">
                    <?php if (get_field('external_link', get_the_ID())) : ?>
                        <h3><a href="<?= get_field('external_link', get_the_ID()) ?>" target="_blank"><?php the_title() ?></a></h3>
                    <?php else : ?>
                        <h3><a href="<?= get_permalink() ?>"><?php the_title() ?></a></h3>
                    <?php endif ?>
                    <span><?= get_the_date('j F Y') ?></span>
                    <div class="article-listing2--row--right--copy">
                        <p><?= get_the_excerpt() ?></p>
                    </div>
                </div>
            </div>
        <?php $count++; endwhile; wp_reset_postdata(); endif ?>
    </div>
</section>