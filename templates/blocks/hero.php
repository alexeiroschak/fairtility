<section id="<?= get_field('section_id') ?>" class="block hero">
    <div class="container">
        <div class="hero--left">
            <h1><?= get_field('headline') ?></h1>
            <div class="hero--left--copy">
               <?php the_field('copy') ?> 
            </div>
            <?php if (get_field('show_request_a_demo_link')) : ?>
                <a href="#" class="hero--left--link">Request a demo →</a>
            <?php endif ?>
        </div>
        <div class="hero--right" style="background-image:url(<?= get_field('image') ?>)"></div>
    </div>
</section>