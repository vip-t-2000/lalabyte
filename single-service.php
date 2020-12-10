<?php 
  global $wp_query;
  $post_obj = $wp_query->get_queried_object();
  $slug = $post_obj->post_name;
?>
<?php get_header(); ?>

  <main class="l_main s_service">
    <div class="c_vis_box <?= $slug ?>">
      <p class="page_ttl">サービス内容</p>
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
        <h1 class="c_head_1 <?= $slug ?>"><?= get_the_title(); ?></h1>
        <div class="inner">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_post_thumbnail(); ?>
            <div class="l_box">
              <?php the_content(); ?>
            </div>
            <div class="contact_box"></div>
          <?php endwhile; endif; ?>
        </div>
      </div>

      <?php get_sidebar('service'); ?>
    </div>
  </main>

<?php get_footer(); ?>