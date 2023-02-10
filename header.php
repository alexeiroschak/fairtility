<!DOCTYPE html>
<html lang="en">
<head>

   <?php if (isset($_COOKIE['CookieConsent'])) : ?>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5QMFSN6');</script>
      <!-- End Google Tag Manager -->
   <?php endif ?>

   <meta charset="UTF-8">
   <title><?php the_title(); ?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/img/favicon.png" type="image/png">
   <?php wp_head(); ?>
</head>
<body <?php body_class( get_page_slug() ); ?>>

      <?php if (isset($_COOKIE['CookieConsent'])) : ?>
         <!-- Google Tag Manager (noscript) -->
         <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QMFSN6"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
         <!-- End Google Tag Manager (noscript) -->
      <?php endif ?>

   <aside id="request_demo_flyout">
      <button id="request_demo_flyout__close_button">
         <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.41421 0L22.6274 21.2132L21.2132 22.6274L9.27258e-07 1.41421L1.41421 0Z" fill="#009898" />
            <path d="M22.6274 1.41421L1.41421 22.6274L0 21.2132L21.2132 0L22.6274 1.41421Z" fill="#009898" />
         </svg>
      </button>
      <h2>Request a demo</h2>
      <img src="<?= get_template_directory_uri() ?>/assets/img/flyout-wedges.svg">
      <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
      <script>
         hbspt.forms.create({
            region: "eu1",
            portalId: "25901046",
            formId: "0d1740e3-8726-4cdf-9779-15b03616f5c0"
         });
      </script>
   </aside>

   <header id="header">
      <div class="container">
         <a id="header__logo" href="/">
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="Fairtility">
         </a>
         <div id="header__notice">
            <?php $featured = get_field('featured_callout', 'option'); ?>
            <span><?= $featured['left_text'] ?></span>
            <a href="<?= $featured['right_link_url'] ?>"><?= $featured['right_link_text'] ?></a>
         </div>
         <button id="header__hamburger">
            <span></span>
            <span></span>
            <span></span>
         </button>
      </div>
   </header>

   <nav id="main_nav">
      <div id="main_nav__header">
         <a href="/">
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo-black.svg" alt="Fairtility">
         </a>
         <button id="main_nav__header__close">
            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M1.41421 0L22.6274 21.2132L21.2132 22.6274L9.27258e-07 1.41421L1.41421 0Z" fill="#009898" />
               <path d="M22.6274 1.41421L1.41421 22.6274L0 21.2132L21.2132 0L22.6274 1.41421Z" fill="#009898" />
            </svg>
         </button>
      </div>
      <?php
			wp_nav_menu([
				'menu' => 'Header Menu'
			])
		?>
   </nav>