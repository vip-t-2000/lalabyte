<?php get_header(); ?>

<main class="l_main front">
  <h1 class="u_head_1">
    <?= get_the_title(); ?>
  </h1>

  <div class="l_wrapper l_archive">
      <div class="l_container">
         <p class="txt">
           当サイトにご訪問頂きありがとうございます。
         </p>

         <p class="txt">
           当サイトは企業サイトではなく、個人が運営するサイトになります。
           そのためお仕事に関しては本業があるため、平日の日中はお受けできない可能性があります。<br>
           予めご了承いただければ幸いでございます。<br><br>
           ご連絡については、平日の日中でもご返信ができるので<br>
           ご気軽にご相談ください。
         </p>

         <p class="txt">
           尚、オンライン教室、実装作業、調査依頼などの作業については
           基本、平日夕方以降、土日での対応となります事重ねてご了承いただければ幸いです。<br><br>
           お仕事をお受けしたからには、全力で対応して参ります。
         </p>

          <p class="txt">
            もし、サイト訪問時に企業サイトっぽい印象を受けていただいたのであれば、
            お力になれる部分があると思いますので、ご依頼心待ちにしております。
          </p>

          <p class="txt">
            最後になりますが、みなさまと一緒にお仕事できる日を楽しみにしています。
            何卒宜しくお願い致します。
          </p>

      </div>

      <?php get_sidebar('service'); ?>
    </div>
</main>

<?php get_footer(); ?>
