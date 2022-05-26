<div id="<?= get_field('section_id') ?>" class="block bio-list">
    <div class="container">
        <h2><?= get_field('headline') ?></h2>
        <div class="bio-list--bios">
            <?php
                $bios = get_field('bios');
                foreach ($bios as $bio) :
            ?>
                <div class="bio-list--bios--bio">
                    <div class="bio-list--bios--bio--image" style="background-image:url(<?= $bio['image'] ?>)"></div>
                    <h3><?= $bio['name'] ?></h3>
                    <p><?= $bio['title'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>