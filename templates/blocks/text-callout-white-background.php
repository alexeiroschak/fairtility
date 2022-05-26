<div id="<?= get_field('section_id') ?>" class="block text-callout">
    <div class="container">
        <div class="text-callout--container">
            <div><?php the_field('copy') ?></div>
            <?php if (get_field('link_text')) : ?>
                <a href="<?= get_field('link_url') ?>"><?= get_field('link_text') ?></a>
            <?php endif ?>
        </div>
    </div>
</div>