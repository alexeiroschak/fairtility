<div id="<?= get_field('section_id') ?>" class="block two-col-intro">
    <div class="container">
        <div class="two-col-intro--container">
            <div class="two-col-intro--container--left">
                <h2><?= get_field('headline') ?></h2>
            </div>
            <div class="two-col-intro--container--right">
                <?php the_field('copy') ?>
            </div>
        </div>
    </div>
</div>