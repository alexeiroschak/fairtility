<div id="<?= get_field('section_id') ?>" class="block summary">
    <div class="container">
        <div class="summary--container">
            <div class="summary--container--left">
                <h2><?= get_field('headline') ?></h2>
            </div>
            <div class="summary--container--right">
                <?php the_field('copy') ?>
            </div>
        </div>
    </div>
</div>