<div id="<?= get_field('section_id') ?>" class="block image-and-text-reverse">
    <div class="container">
        <div class="image-and-text-reverse--container">
            <div class="image-and-text-reverse--left">
                <h2><?= get_field('headline') ?></h2>
                <div class="image-and-text-reverse--left--copy">
                    <?php the_field('copy') ?>
                </div>
                <?php if (get_field('link_text')) : ?>
                    <a href="<?= get_field('link_url') ?>" class="image-and-text-reverse--left--link"><?= get_field('link_text') ?></a>
                <?php endif ?>
            </div>
            <div class="image-and-text-reverse--right">
                <img src="<?= get_field('image') ?>" class="desktop">
                <img src="<?= get_field('image_mobile') ?>" class="mobile">
            </div>
        </div>
    </div>
</div>