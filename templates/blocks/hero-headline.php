<div id="<?= get_field('section_id') ?>" class="block hero-headline">
    <div class="container">
        <h1 class="<?php if (get_field('show_divider')) { echo 'has-line'; } ?>">
            <?php if (get_field('use_page_title')) : ?>
                <?php the_title() ?>
            <?php else : ?>
                <?= get_field('headline') ?>
            <?php endif ?>
        </h1>
    </div>
</div>