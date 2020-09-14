 <?php get_header(); ?>
    <div class="archive-blog-title wrapper">
      <h1 class="section-title archive-page-title">STAFF blog</h1>
      
        <p class="page-title_p">ブログ一覧</p>
      </div>
<main>
    <div class="wrapper">
      <div class="blog-box ">
            <div class="flex archive-blog-inner"> 
               <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>   
              <a href="<?php the_permalink(); ?>" class="magazine-colum">
                <?php if( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail(); ?>
                <?php else: ?> 

                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img" />
                  <?php endif; ?>
                  <?php if (!is_category() && has_category()): ?> 

                
                   <?php endif; ?>


                <div class="text-content">
                  <p class="article__date"><?php echo get_the_date('Y-m-d'); ?></p> 
                  <h3 class="article__title">
                   <?php
                   if(mb_strlen($post->post_title, 'UTF-8')>20){
                     $title= mb_substr($post->post_title, 0, 20, 'UTF-8');
                     echo $title.'…';
                     }else{
                       echo $post->post_title;
                       }
                       ?>
                       </h3> 
                
                </div>
                     
              </a>
              <?php endwhile; ?>
              <?php else: ?> 
                 <!-- 投稿が無い場合の処理 -->
                 <p>投稿が見つかりません。</p>
                 <?php endif; ?>
                </div>
              </div>
            
            
          </div>
        </main>
        <?php get_footer(); ?>

    