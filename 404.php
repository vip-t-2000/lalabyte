<?php get_header(); ?>
<body class="p_404 page">

  <?php get_template_part( 'assets/include/l_loader' ); ?>
  <!-- l_loader -->

  <div class="l_container">

    <?php get_template_part( 'assets/include/c_page_top_btn' ); ?>
    <!-- c_btn_p_top -->

    <?php get_template_part( 'assets/include/l_header' ); ?>
    <!-- l_header -->

    <?php get_template_part( 'assets/include/l_header_sp' ); ?>
    <!-- l_header_sp -->

    <?php get_template_part( 'assets/include/l_menu_sp' ); ?>
    <!-- l_menu_sp -->

    <div class="l_content">

      <div class="l_main">
        <div class="inner">
          <p class="txt_404">404 ページが存在しません。</p>
        </div>
      </div>
      <!-- l_main -->
      
    </div>
    <!-- l_content -->

    <?php get_template_part( 'assets/include/l_footer' ); ?>
    <!-- l_footer -->

  </div>
  <!-- l_container -->

<?php get_footer(); ?>
