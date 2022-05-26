<section id="<?= get_field('section_id') ?>" class="block quote">
    <div class="container">
        <img src="<?= get_template_directory_uri() ?>/assets/img/quote-wedges.svg" class="quote--left">
        <div class="quote--container">
            <div class="quote--container--quote"><?= get_field('quote') ?></div>
            <div class="quote--container--source">
                <div class="quote--container--source--image" style="background-image:url(<?= get_field('source_image') ?>)"></div>
                <div class="quote--container--source--text"><?= get_field('source_text') ?></div>
            </div>
            <?php if (get_field('link_url')) : ?>
                <a href="<?= get_field('link_url') ?>" class="quote--container--link"><?= get_field('link_text') ?></a>
            <?php endif ?>
        </a>
    </div>
</section>