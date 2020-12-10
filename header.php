<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php
    get_template_part( 'assets/include/viewport' );
    get_template_part( 'assets/include/icon' );
    get_template_part( 'assets/include/css' );
  ?>
  <?php wp_head(); ?>
</head>
<body>
<?php wp_is_mobile() ? get_template_part( 'assets/include/l_header_sp' ) : get_template_part( 'assets/include/l_header' ); ?>