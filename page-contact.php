<?php 
  global $wp_query;
  $post_obj = $wp_query->get_queried_object();
  $slug = $post_obj->post_name;
?>
<?php get_header(); ?>

  <main class="l_main s_service">
    <div class="c_vis_box <?= $slug ?>">
      <h1 class="page_ttl">簡単お問い合わせフォーム</h1>
    </div>
    <?php get_template_part( 'assets/include/bread' ); ?>
    <p class="read_txt">
      より質の良いサービスを提供していくために、お客様の協力も必要不可欠です。<br>
      単純な需要と供給だけの関係ではなく<br>
      お客様と共に戦う戦友として、またビジネスパートナーとして<br>
      目的にあった最適なサービスを提供します。
    </p>


    <div class="l_wrapper">
      <div class="l_container">
        <div class="inner">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="l_box">
              <?php the_content(); ?>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>

      <?php get_sidebar('service'); ?>
    </div>
  </main>

<?php get_footer(); ?>