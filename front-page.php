<?php
/**
Template Name: トップページ
 */
get_header(); ?>

<main class="l_main front">
  <h1 class="u_head_1">
    全体の運用に関する<span class="c_1">お悩み</span><br>
    プログラミングに関する<span class="c_1">お悩み</span><br>
    あらゆる課題や悩みを解決<br>
    気軽にご相談ください。
  </h1>

  <section class="l_contents service">
    <a href="/service" class="link">
      <picture>
        <source srcset="<?php tempath() ?>/assets/img/top/webp/img10.webp" type="image/webp">
        <img src="<?php tempath() ?>/assets/img/top/img10.png">
      </picture>
      <div class="txt_box">
        <p class="txt">サービス</p>
        <h2>どのような<span class="c_1">サービス</span>をお探しですか？</h2>
      </div>
    </a>
  </section>

  <section class="l_contents plan">
    <a href="/service" class="link">
      <picture>
        <source srcset="<?php tempath() ?>/assets/img/top/webp/img03.webp" type="image/webp">
        <img src="<?php tempath() ?>/assets/img/top/img03.jpg">
      </picture>
      <div class="txt_box">
        <p class="txt">料金プラン</p>
        <h2>あなたに合った<span class="c_1">価格</span>で提供します。</h2>
      </div>
    </a>
  </section>

  <div class="contents_child">

    <section class="l_contents child my">
      <a href="/service" class="link">
        <picture>
          <source srcset="<?php tempath() ?>/assets/img/top/webp/img06.webp" type="image/webp">
          <img src="<?php tempath() ?>/assets/img/top/img06.jpg">
        </picture>
        <div class="txt_box">
          <h2>自己紹介</h2>
        </div>
      </a>
    </section>

    <section class="l_contents child column">
      <a href="/service" class="link">
        <picture>
          <source srcset="<?php tempath() ?>/assets/img/top/webp/img08.webp" type="image/webp">
          <img src="<?php tempath() ?>/assets/img/top/img08.jpg">
        </picture>
        <div class="txt_box">        
          <h2>コラム</h2>
        </div>
      </a>
    </section>

    <section class="l_contents child news">
      <a href="/service" class="link">
        <picture>
          <source srcset="<?php tempath() ?>/assets/img/top/webp/img04.webp" type="image/webp">
          <img src="<?php tempath() ?>/assets/img/top/img04.jpg">
        </picture>
        <div class="txt_box">
          <h2>ニュース</h2>
        </div>
      </a>
    </section>

    <section class="l_contents child qa">
      <a href="/service" class="link">
        <picture>
          <source srcset="<?php tempath() ?>/assets/img/top/webp/img11.webp" type="image/webp">
          <img src="<?php tempath() ?>/assets/img/top/img11.jpg">
        </picture>
        <div class="txt_box">        
          <h2>よくある質問</h2>
        </div>
      </a>
    </section>

  </div>

</main>

<?php get_footer(); ?>
