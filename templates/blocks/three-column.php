<section id="<?= get_field('section_id') ?>" class="block three-column">
    <div class="container">
       <div class="three-column--container">
           <?php
                $cols = get_field('columns');
                foreach ($cols as $col) :
           ?>
           <div class="col">
               <h3><?= $col['headline'] ?></h3>
               <div class="col--copy">
                   <?= $col['copy'] ?>
               </div>
           </div>
           <?php endforeach ?>
       </div>
    </div>
</section>