<div id="<?= get_field('section_id') ?>" class="block hero-alt">
    <div class="container">
        <div class="hero-alt--left" style="background-image:url(<?= get_field('left_background_image') ?>)">
            <h1><?= get_field('left_headline') ?></h1>
        </div>
        <a href="<?= get_field('right_link_url') ?>" class="hero-alt--right">
            <video muted autoplay loop src="<?= get_field('right_background_video') ?>"></video>
            <span><?= get_field('right_link_text') ?></span>
        </a>
    </div>
</div>