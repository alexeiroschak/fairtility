<div id="<?= get_field('section_id') ?>" class="block content-list">
    <div class="container">
        <div class="content-list--container">
            <?php
                $items = get_field('items');
                foreach ($items as $item) :
            ?>
                <div class="item">
                    <?php if (!empty($item['headline'])) : ?>
                        <h3><?= $item['headline'] ?></h3>
                    <?php endif ?>
                    <div class="item--copy">
                        <?= $item['copy'] ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>