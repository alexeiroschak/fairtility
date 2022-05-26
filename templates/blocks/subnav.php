<section id="<?= get_field('section_id') ?>" class="block subnav">
    <div class="container">
       <nav>
           <ul>
                <?php
                    $items = get_field('items');
                    foreach ($items as $item) :
                ?>
                    <li><a href="<?= $item['link'] ?>"><?= $item['name'] ?></a></li>
                <?php endforeach ?>
           </ul>
       </nav>
    </div>
</section>