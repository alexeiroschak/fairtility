<div id="<?= get_field('section_id') ?>" class="block two-col-with-form2">
    <div class="container">
        <div class="two-col-with-form2--left">
            <?php if (get_field('headline')) : ?>
                <h2><?= get_field('headline') ?></h2>
            <?php endif ?>
            <div class="two-col-with-form2--left--copy">
                <?php the_field('copy') ?>
            </div>
        </div>
        <div class="two-col-with-form2--right">
            <?= do_shortcode('[gravityform id="' . get_field('form') . '" title="false" description="false" ajax="true"]') ?>
        </div>
    </div>
</div>