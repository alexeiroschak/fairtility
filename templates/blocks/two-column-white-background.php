<div id="<?= get_field('section_id') ?>" class="block two-column-white-background">
    <div class="container">
        <div class="two-column-white-background--container">
            <?php
                $columns = get_field('columns');
                foreach ($columns as $col) :
            ?>
                <div class="two-column-white-background--container--col">
                    <div class="two-column-white-background--container--col--preview" style="background-image:url(<?= $col['image'] ?>)"></div>
                    <h2><?= $col['headline'] ?></h2>
                    <div class="two-column-white-background--container--col--copy">
                        <?= $col['copy'] ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>