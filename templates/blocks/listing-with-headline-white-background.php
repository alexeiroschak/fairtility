<div id="<?= get_field('section_id') ?>" class="block listing-with-headline">
    <div class="container">
        <div class="listing-with-headline--container">
            <div class="listing-with-headline--container--left">
                <h2><?= get_field('headline') ?></h2>
            </div>
            <div class="listing-with-headline--container--right">
                <?php
                    $items = get_field('items');
                    foreach ($items as $item) :
                ?>
                    <div class="item">
                        <div class="item--header">
                            <h3>
                                <?php if (!empty($item['link_url'])) : ?>
                                    <a href="<?= $item['link_url'] ?>" target="_blank"><?= $item['headline'] ?></a>
                                <?php else : ?>
                                    <?= $item['headline'] ?>
                                <?php endif ?>
                            </h3>
                            <h4><?= $item['subhead'] ?></h4>
                        </div>
                        <div class="item--copy">
                            <?= $item['copy'] ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>