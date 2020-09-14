 <?php get_header(); ?> 

     <?php if(have_posts()): the_post(); ?> 
    <div class="single-eyecatch wrapper">
      <?php if( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail(); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
          <?php endif; ?>
    </div> 
    <div class="single-container wrapper">
      <div class="single-header__contain">
        <div class="style__border">
           <?php if(has_category() ): ?> 
         
           <?php endif; ?>

          <h1 class="single-title">
              <?php the_title(); ?>
          </h1>
            <p class="single-date"><?php echo get_the_date('Y-m-d'); ?></p> 
        </div>
      </div>
      <div class="main-text">
        <?php the_content(); ?> 
      </div>
    </div>
     <?php endif; ?>


    <div class="new-articles new-articles__single wrapper">
      <h2 class="section-title">RELATION</h2>
      <div class="flex single-content">
        <?php if(has_category() ) {
          $cats =get_the_category();
          $catkwds = array();
          foreach($cats as $cat){
            $catkwds[] = $cat->term_id;
            }
            } ?>
            <?php $args = array(
              'post_type' => 'post',
              'posts_per_page' => '3',  
              'post__not_in' =>array( $post->ID ), 
              'category__in' => $catkwds,
              'orderby' => 'rand'
              );
              $my_query = new WP_Query( $args );?>
              <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="magazine-colum">
        <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?> 
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png"alt="no-img" />
          <?php endif; ?>
          <?php if (!is_category() && has_category()): ?> 
         
           <?php endif; ?> 
          <div class="text-content">
            <p class="article__date"><?php echo get_the_date('Y-m-d'); ?></p> 
            <h3 class="article__title">
                <?php the_title(); ?>
              </h3> 
           
          </div>
        </a>
         <?php endwhile; ?>
         <?php wp_reset_postdata(); ?>
        </div>
      </div>
       <p class="news-articles_link">
               <?php
               // 指定したカテゴリーの ID を取得  
               $category_id = get_cat_ID('blog');
              // このカテゴリーの URL を取得
              $category_link = get_category_link($category_id);
              ?>
      <a href="<?php echo esc_url($category_link); ?>" class="common-btn single-btn">一覧に戻る</a>
    </p>
      <?php get_footer(); ?>