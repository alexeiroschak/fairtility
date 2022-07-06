<div id="<?= get_field('section_id') ?>" class="block bio-list">
    <div class="container">
        <h2><?= get_field('headline') ?></h2>
        <div class="bio-list--bios">
            <?php
                $bios = get_field('bios');
                foreach ($bios as $bio) :
            ?>
                <div class="bio-list--bios--bio">
                    <?php  if ($bio['link']) : ?>
                        <a href="<?= $bio['link'] ?>" target="_blank" class="bio-list--bios--bio--image" style="background-image:url(<?= $bio['image'] ?>)"></a>
                    <?php else : ?>
                        <div class="bio-list--bios--bio--image" style="background-image:url(<?= $bio['image'] ?>)"></div>
                    <?php endif ?>
                    <h3><?= $bio['name'] ?></h3>
                    <p><?= $bio['title'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>