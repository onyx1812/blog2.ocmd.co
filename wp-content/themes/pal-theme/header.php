<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="keywords" content="<?php bloginfo('keywords'); ?>"/>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <meta name="copyright" content="<?php bloginfo('copyright'); ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 user-scalable=0">
    <meta name="author" content="MaxGloba">
    <meta name="theme-color" content="#ffffff">

    <title><?php wp_title( '|', true, 'right' ); echo get_bloginfo('name'); ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico?v=1.00" />

    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-MVR2TP6"></script>

    <script>
      const vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
      const pageID = <?php echo get_the_ID(); ?>;
    </script>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js'
    );
      fbq('init', '2456495754645366');
      fbq('init', '3443645445747695');
      fbq('init', '767835227441749');
      fbq('track', 'PageView');
    </script>
    <!-- End Facebook Pixel Code -->

      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKQX69B');</script>
<!-- End Google Tag Manager -->



    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >

      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKQX69B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <header class="main-header">
      <div class="container">
        <a target="_blank" href="https://ocmd.co" title="Blog | OCMD LLC"><img src="<?php echo IMG.'/logo.svg'; ?>" alt="" class="logo logo-post" width="160px"></a>
        <?php if( is_page_template( 'templates/page-blog_fb.php' ) ): ?>
        <button class="nav-btn">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <nav class="nav-top nav-top-hide">
          <ul>
            <li><a href="#" class="openPopup" data-popup="terms">Terms</a></li>
            <li><a href="#" class="openPopup" data-popup="privacy">Privacy</a></li>
            <!-- <li><a href="#" class="openPopup" data-popup="citations">Citations</a></li> -->
          </ul>
        </nav>
      <?php endif; ?>
      </div>
    </header>