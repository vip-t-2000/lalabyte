<link rel="stylesheet" href="<?php tempath() ?>/assets/css/style.css">
<?php if (is_front_page()) { ?>
  <link rel="stylesheet" href="<?php tempath() ?>/assets/css/top.css">
<?php } ?>
<?php if (is_singular('service')) { ?>
  <link rel="stylesheet" href="<?php tempath() ?>/assets/css/single-service.css">
<?php } ?>
<?php if (is_singular('column')) { ?>
  <link rel="stylesheet" href="<?php tempath() ?>/assets/css/single-column.css">
<?php } ?>