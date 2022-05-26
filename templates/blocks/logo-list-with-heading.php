<div id="<?= get_field('section_id') ?>" class="block logo-list-with-heading">
    <div class="container">
        <div class="logo-list-with-heading--left">
            <h2><?= get_field('heading') ?></h2>
        </div>
        <div class="logo-list-with-heading--right">
            <?php
                $logos = get_field('logos');
                foreach ($logos as $logo) :
            ?>
                <img src="<?= $logo['logo'] ?>">
            <?php endforeach ?>
        </div>
    </div>
</div>