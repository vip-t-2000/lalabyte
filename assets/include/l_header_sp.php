<!--CDNでjQuery読み込む-->
<script
src="https://code.jquery.com/jquery-2.2.4.min.js"
integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

    <div class="logo">
      <a href="/" class="top_link">
        <picture>
          <source srcset="<?php tempath() ?>/assets/img/image.webp" type="image/webp">
          <img src="<?php tempath() ?>/assets/img/logo.png">
        </picture>
      </a>
    </div>
  <div class="el_humburger"><!--ハンバーガーボタン-->
    <div class="el_humburger_wrapper">
      <span class="el_humburger_bar top"></span>
      <span class="el_humburger_bar middle"></span>
      <span class="el_humburger_bar bottom"></span>
    </div>
  </div>
 
  <header class="navi"><!--ナビゲーション-->
    <div class="navi_inner">
      <div class="navi_item"><a href="/" class="">TOP</a></div>
      <div class="navi_item"><a href="/service" class="">サービス</a></div>
      <div class="navi_item"><a href="/site" class="">当サイトについて</a></div>
      <div class="navi_item"><a href="/author" class="">自己紹介</a></div>
      <!-- <div class="navi_item"><a href="/column" class="">コラム</a></div> -->
      <!-- <div class="navi_item"><a href="">FAQ</a></div> -->
      <div class="navi_item"><a href="/contact" class="">お問い合わせ</a></div>
    </div>
  </header>