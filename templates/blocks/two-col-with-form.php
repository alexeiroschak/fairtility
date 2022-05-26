<div id="<?= get_field('section_id') ?>" class="block two-col-with-form">
    <div class="container">
        <div class="two-col-with-form--container">
            <div class="two-col-with-form--container--left">
                <h2><?= get_field('headline') ?></h2>
                <div class="two-col-with-form--container--left--copy">
                    <?php the_field('copy') ?>
                </div>
            </div>
            <div class="two-col-with-form--container--right">
                <?= do_shortcode('[gravityform id="' . get_field('form') . '" title="false" description="false" ajax="true"]') ?>
            </div>
        </div>
    </div>
</div>