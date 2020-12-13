<link rel="stylesheet" href="<?php tempath() ?>/assets/css/style.css">
<?php if (is_front_page()) { ?>
  <link rel="stylesheet" href="<?php tempath() ?>/assets/css/top.css">
<?php } ?>
<?php if (is_singular()) { ?>
  <link rel="stylesheet" href="<?php tempath() ?>/assets/css/single-service.css">
<?php } ?>