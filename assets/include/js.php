<script type="text/javascript" src="<?php tempath() ?>/assets/js/menu.js"></script>
<?php if (is_front_page()) { ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php tempath() ?>/assets/js/min/slick.min.js"></script>
<script>
$('.slider').slick({
  centerMode: true,
  centerPadding: '5%',
  dots: true,
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 1000,
  infinite: true,
});
</script>
<?php } ?>
