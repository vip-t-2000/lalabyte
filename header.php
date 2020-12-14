<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-K1FVE241G1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-K1FVE241G1');
  </script>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="<?php tempath() ?>/assets/img/favicon.jpg">
  <title><?= is_front_page() ? bloginfo( 'name' ) : get_the_title() ." | ". get_bloginfo( 'name' ) ; ?></title>
  <?php
    get_template_part( 'assets/include/viewport' );
    get_template_part( 'assets/include/icon' );
    get_template_part( 'assets/include/css' );
  ?>
  <?php wp_head(); ?>
</head>
<body>
<?php wp_is_mobile() ? get_template_part( 'assets/include/l_header_sp' ) : get_template_part( 'assets/include/l_header' ); ?>