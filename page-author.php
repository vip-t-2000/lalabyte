<?php get_header(); ?>

<main class="l_main front">
  <h1 class="u_head_1">
    <?= get_the_title(); ?>
  </h1>

  <div class="l_wrapper l_archive">
      <div class="l_container">
      
      <h2 class="c_head_2">基本プロフィール</h2>
      <table class="table04">
        <tr>
          <th>名前</th>
          <td>ぐぁ</td>
        </tr>
        <tr>
          <th>出身地</th>
          <td>ラスベガス(埼玉県)</td>
        </tr>
        <tr>
          <th>出身校</th>
          <td>HAL東京</td>
        </tr>
        <tr>
          <th>誕生日</th>
          <td>1993年7月30日</td>
        </tr>
        <tr>
          <th>趣味</th>
          <td>サウナ、オンラインゲーム、ゴルフ</td>
        </tr>
        <tr>
          <th>好きなスポーツ</th>
          <td>陸上、ゴルフ、eスポーツ</td>
        </tr>
        <tr>
          <th>好きな映画</th>
          <td>マトリックス　この業界に入るきっかけとなった作品です。</td>
        </tr>
      </table>

      <h2 class="c_head_2">その他情報</h2>
      <table class="table04">
        <tr>
          <th rowspan="4">経歴</th>
          <td>某システム会社に新卒入社</td>
        </tr>
        <tr>
          <td>某通信キャリア会社にバックエンドとして参画</td>
        </tr>
        <tr>
          <td>某大手SEO会社にフロントエンドエンジニアとして入社</td>
        </tr>
        <tr>
          <td>作業責任者として、現役活動中</td>
        </tr>
        <tr>
          <th>性格診断</th>
          <td>エンターテイナー</td>
        </tr>
        <tr>
          <th>リンク</th>
          <td><a href="https://www.16personalities.com/ja/esfp%E5%9E%8B%E3%81%AE%E6%80%A7%E6%A0%BC">16Personalities性格診断テスト</a></td>
        </tr>
      </table>
      </div>

      <?php get_sidebar('service'); ?>
    </div>
</main>

<?php get_footer(); ?>
