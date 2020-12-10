<?php 
  global $wp_query;
  $post_obj = $wp_query->get_queried_object();
  $slug = $post_obj->post_name;
?>
<?php get_header(); ?>

  <main class="l_main">
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


    <div class="l_wrapper l_archive">
      <div class="l_container">
        <h1 class="c_head_1">サービス一覧</h1>
        <ul class="lists">
          <?php if ( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
            <li class="item">
              <a href="<?php the_permalink() ?>" class="link">
                <figure class="img_box">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </figure>
                <div class="info">
                  <div class="info_txt">
                    <h3 class="u_head_2"><?php the_title(); ?></h3>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile;?>
          <?php endif; ?>
        </ul>
      </div>

      <?php get_sidebar('service'); ?>
    </div>
  </main>

<?php get_footer(); ?>