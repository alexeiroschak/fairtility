<section id="<?= get_field('section_id') ?>" class="block two-col-center-stack">
    <div class="container">
        <?php
            $sections = get_field('sections');
            $count = 0;
            foreach ($sections as $section) :
        ?>
            <div class="two-col-center-stack--row">
                <div class="two-col-center-stack--row--left">
                    <?php if ($count == 0) : ?>
                        <h2><?= get_field('headline') ?></h2>
                    <?php endif ?>
                </div>
                <div class="two-col-center-stack--row--right">
                    <h3>
                        <?php if ($section['link']) : ?>
                            <a href="<?= $section['link'] ?>"><?= $section['headline'] ?></a>
                        <?php else : ?>
                            <?= $section['headline'] ?>
                        <?php endif ?>
                    </h3>
                    <?php if ($section['subhead']) : ?>
                        <span><?= $section['subhead'] ?></span>
                    <?php endif ?>
                    <div class="two-col-center-stack--row--right--copy">
                        <?= $section['copy'] ?>
                    </div>
                </div>
            </div>
        <?php $count++; endforeach ?>
    </div>
</section>