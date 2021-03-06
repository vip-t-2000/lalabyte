<?php 
  global $wp_query;
  $post_obj = $wp_query->get_queried_object();
  $slug = $post_obj->post_name;
?>
<?php get_header(); ?>

  <main class="l_main s_service">
    <div class="c_vis_box <?= $slug ?>">
      <h1 class="page_ttl">ページがみつかりませんでした。</h1>
    </div>
    <?php get_template_part( 'assets/include/bread' ); ?>


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