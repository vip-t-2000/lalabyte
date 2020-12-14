<?php 
  global $wp_query;
  $post_obj = $wp_query->get_queried_object();
  $slug = $post_obj->post_name;
?>
<?php get_header(); ?>

  <main class="l_main s_column">
    <div class="c_vis_box <?= $slug ?>">
      <p class="page_ttl">コラム</p>
    </div>
    <?php get_template_part( 'assets/include/bread' ); ?>


    <div class="l_wrapper">
      <div class="l_container">
        <h1 class="c_head_1 <?= $slug ?>"><?= get_the_title(); ?></h1>
        <div class="inner">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="thumb_box">
              <?php the_post_thumbnail(); ?>
            </div>
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