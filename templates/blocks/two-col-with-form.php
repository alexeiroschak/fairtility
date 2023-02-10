<div id="<?= get_field('section_id') ?>" class="block two-col-with-form">
   <div class="container">
      <div class="two-col-with-form--container">
         <div class="two-col-with-form--container--left">
            <h2><?= get_field('headline') ?></h2>
            <div class="two-col-with-form--container--left--copy">
               <?php the_field('copy') ?>
            </div>
         </div>
         <div class="two-col-with-form--container--right">
            <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
            <script>
               hbspt.forms.create({
                  region: "eu1",
                  portalId: "25901046",
                  formId: "0d1740e3-8726-4cdf-9779-15b03616f5c0"
               });
            </script>
         </div>
      </div>
   </div>
</div>