<aside class="l_side">

  

  <div class="recommend">
    <p class="c_side_head">SERVICE</p>
    <?php
    $args = array(
        'post_type' => 'service',
        'order' => 'ASC'
    );
    $query = new WP_Query($args); ?>
    <ul class="lists">
      <?php if( $query -> have_posts() ): while ($query -> have_posts()) : $query -> the_post(); ?>
        <li class="item">
          <a href="<?php the_permalink() ?>" class="link">
            <p class="ttl <?= $post->post_name;?>"><?php the_title(); ?></p>            
          </a>
        </li>
      <?php endwhile; endif; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
  </div>
  <p class="c_side_head">PROFILE</p>
  <div class="profile-card">
    <div class="profile-card__inner">
      <div class="profile-thumb">
        <img src="http://vip2000.wp.xdomain.jp/wp-content/uploads/2020/12/13162817295579-scaled.jpg" alt="アイコン">
      </div>
      <div class="profile-content">
        <span class="profile-name">ぐぁ</span>
        <span class="profile-job">バックエンド・フロントエンドエンジニア</span>
        <span class="profile-intro">埼玉在住のしがないエンジニアです。ゲームをこよなく愛する民。合言葉は「今日何時？」</span>
      </div>
    </div>
  </div>
  <a class="twitter-timeline" data-height="500" data-theme="white" href="https://twitter.com/acepirate4649?ref_src=twsrc%5Etfw">Tweets by acepirate4649</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</aside>