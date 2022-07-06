<section id="<?= get_field('section_id') ?>" class="block hero-video">
    <div class="container">
        <div class="hero-video--left">
            <h1><?= get_field('headline') ?></h1>
            <div class="hero-video--left--copy">
               <?php the_field('copy') ?> 
            </div>
            <?php if (get_field('show_request_a_demo_link')) : ?>
                <a href="#" class="hero-video--left--link demo">Request a demo →</a>
            <?php endif ?>
        </div>
        <div class="hero-video--right">
            <video autoplay loop muted src="<?= get_field('video') ?>"></video>
        </div>
    </div>
</section>