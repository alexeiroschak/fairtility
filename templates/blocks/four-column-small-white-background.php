<div id="<?= get_field('section_id') ?>" class="block four-column-small">
    <div class="container">
        <div class="four-column-small--container">
            <?php
                $columns = get_field('columns');
                foreach ($columns as $col) :
            ?>
                <div class="col">
                    <h3><?= $col['headline'] ?></h3>
                    <div><?= $col['copy'] ?></div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>