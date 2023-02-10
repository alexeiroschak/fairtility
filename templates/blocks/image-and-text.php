<div id="<?= get_field('section_id') ?>" class="block image-and-text">
    <div class="container">
        <div class="image-and-text--left">
            <img src="<?= get_field('image') ?>" class="desktop">
            <img src="<?= get_field('image_mobile') ?>" class="mobile">
        </div>
        <div class="image-and-text--right">
            <?php if (get_field('headline')) : ?>
                <h2><?= get_field('headline') ?></h2>
            <?php endif ?>
            <div class="image-and-text--right--copy">
                <?php the_field('copy') ?>
            </div>
            <?php if (get_field('link_text')) : ?>
                <a href="<?= get_field('link_url') ?>" class="image-and-text--right--link"><?= get_field('link_text') ?></a>
            <?php endif ?>
        </div>
    </div>
</div>