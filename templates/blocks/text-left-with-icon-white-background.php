<div id="<?= get_field('section_id') ?>" class="block text-left-with-icon">
    <div class="container">
        <div class="text-left-with-icon--container">
            <div class="text-left-with-icon--container--left">
                <h2><?= get_field('headline') ?></h2>
                <div class="text-left-with-icon--container--left--copy">
                    <?php the_field('copy') ?>
                </div>
            </div>
            <div class="text-left-with-icon--container--right">
                <img src="<?= get_field('icon') ?>">
            </div>
        </div>
    </div>
</div>