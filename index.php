<?php get_header(); ?>

<h2 id="concept1" class="section-title concept-title" >―　concept　―</h2>
<div class="concept flex wrapper">
  
  <div class="concept-content">
    <h2 class="concept-content-title">地域のお客様に愛され続ける<br>アットホームな空間づくり</h2>
    <p class="concept-text">
      お客様の生活を彩るライフスタイルプロデュースを目指し<br>
      ご自身で再現しやすいヘアスタイルを提案いたします。<br>
      サロンを出る瞬間の美しさだけでなく、<br>日常生活の中で輝き続けられるよう、<br>
      ひとりひとり丁寧にサポートいたします。
    </p>
    <a href="" class="concept-btn common-btn">MORE</a>
  </div>
  <div class="concept-img">

    <img src="<?php echo get_template_directory_uri(); ?>/img/concept.jpg" alt="">
  </div>

</div>

<div id="stylist" class="staff wrapper">
  <h2 class="section-title staff-title">―　staff　―</h2>
  <p class="staff-text">最高の技術はもちろん、落ち着いた空間での最高の癒しも、ご提供しております。<br>
  皆様のご来店を心より、お待ちしております。</p>
  <div class="staff-content flex">
    <div class="staff-content-box">
      <img src="<?php echo get_template_directory_uri(); ?>/img/stylist1.jpg" class="staff-img" alt="">
      <p class="staff-name">浅井　明日香</p>
      <p class="subname">ASAI ASUKA</p>
    </div>
    <div class="staff-content-box">
      <img src="<?php echo get_template_directory_uri(); ?>/img/stylist2.jpg" class="staff-img" alt="">
      <p class="staff-name">伊藤　沙奈<br></p>
      <p class="subname">ITO SANA</p>
    </div>
    <div class="staff-content-box">
      <img src="<?php echo get_template_directory_uri(); ?>/img/stylist3.jpg" class="staff-img" alt="">
      <p class="staff-name">上野　高志</p>
    <p class="subname">UENO TAKASHI</p>
    </div>
    <div class="staff-content-box">
      <img src="<?php echo get_template_directory_uri(); ?>/img/stylist4.jpg" class="staff-img" alt="">
      <p class="staff-name">北村　隼人</p>
      <p class="subname">KITAMURA HAYATO</p>
    </div>
    
  </div>

</div>

<div id="hair" class="menu wrapper">
<h2 class="section-title menu-title wrapper">―　menu　―</h2>
  <div class="menu-content flex">
    <div class="menu-content-box">
      <h3 class="menu-box-title">CUT</h3> 
      <p class="menu-text">カット　　　　　　　　　　¥5,000</p>
      <p class="menu-text">カット　　　　　　　　　　¥5,000</p>
      <p class="menu-text">カット　　　　　　　　　　¥5,000</p>
      
    </div>
    <div class="menu-content-box">
      <h3 class="menu-box-title">COLOR</h3>
      <p class="menu-text">カラー　　　　　　　　　　¥5,000</p>
      <p class="menu-text">カラー　　　　　　　　　　¥5,000</p>
      <p class="menu-text">カラー　　　　　　　　　　¥5,000</p>
    </div>
    <div class="menu-content-box">
      <h3 class="menu-box-title">PAMA</h3>
      <p class="menu-text">パーマ　　　　　　　　　　¥4,500</p>
      <p class="menu-text">パーマ　　　　　　　　　　¥4,500</p>
      <p class="menu-text">パーマ　　　　　　　　　　¥4,500</p>
    </div>
  </div>
</div>

<div id="blog" class="blog wrapper">
  <h2 class="section-title blog-title">―　blog　―</h2>
  <div class="blog-content flex">
    <img src="<?php echo get_template_directory_uri(); ?>/img/blog1.jpg" class="blog-img" alt="">
    <div class="blog-content-inner">
      <p class="blog-text">HAIR MIKU<br>スタッフブログなります</p>
      <p class="news-articles_link">
               <?php
               // 指定したカテゴリーの ID を取得  
               $category_id = get_cat_ID('blog');
              // このカテゴリーの URL を取得
              $category_link = get_category_link($category_id);
              ?>
      <a href="<?php echo esc_url($category_link); ?>" class="common-btn blog-btn">BLOG</a>
    </p>
    </div>

  </div>
          
</div>


<div id="access1" class="access wrapper">
  <h2 class="section-title access-title">―　access　―</h2>
  <div class="access-content">
 
    <div class="access-text">
      HAIR MIKU<br>
      <span><i class="fas fa-angle-right"></i>住所:東京都港区南青山10-11-1</span><br>
        <span><i class="fas fa-angle-right"></i>営業時間:パーマ・カラー：9:00～15:30</span><br><span> <i class="fas fa-angle-right"></i>カット：9:00～16:00</span>  <br>
      <span><i class="fas fa-angle-right"></i>定休日:毎週月曜</span><br>
      <span><i class="fas fa-angle-right"></i>電話番号:052-5555-4444<span><br>
   </div>
  </div>
  
    <iframe class="location-map"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4718.3076523306745!2d139.71273143308164!3d35.66793907932595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c9e62866643%3A0x3449e8a23ebd6d85!2z44CSMTA3LTAwNjIg5p2x5Lqs6YO95riv5Yy65Y2X6Z2S5bGx77yT5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1599661475687!5m2!1sja!2sjp"
      width="800" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
      tabindex="0"></iframe>
</div>

<?php get_footer(); ?>