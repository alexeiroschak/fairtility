<div id="<?= get_field('section_id') ?>" class="block two-col-content">
    <div class="container">
        <div class="two-col-content--container">
            <?php
                $cols = get_field('columns');
                foreach ($cols as $col) :
            ?>
                <div class="col">
                    <h2><?= $col['headline'] ?></h2>
                    <div class="col--copy">
                        <?= $col['copy'] ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>