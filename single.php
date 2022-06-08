    <?php get_header(); ?>
    <div class="content">
        <div class="main-content">
            <div class="content-block-area">
                <div class="entry-header">

                    <!-- 投稿日時 -->
                    <div class="entry-date"><?php echo mysql2date('Y-n-j', $post->post_date); ?></div>

                    <!-- 投稿タイトル -->
                    <div class="content-title"><?php the_title(); ?></div>
                    
                    <!-- 投稿カテゴリー -->
                    <div class="entry-cat">
                        <?php
                            $categories = get_the_category();
                            foreach($categories as $category){
                                echo '<a href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
                            }
                        ?>
                    </div>

                    <!-- 投稿タグ -->
                    <div class="entry-tag">
                        <?php
                            $tags = get_the_tags();
                            foreach($tags as $tag){
                                echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
                            }
                        ?>
                    </div>
                </div>

                <!-- 投稿内容 -->
                <?php 
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                ?>
                        
                        <section class="content-detail">
                            <?php the_content(); ?>
                        </section>
                <?php 
                    endwhile;
                endif;
                ?>
            </div>

            <!-- 前後の記事リンク -->
            <?php if( get_previous_post()|| get_next_post()): ?>
            <div class="entry-pager">
                <?php
                //前の記事へ
                previous_post_link('%link', '<span>%title</span>', TRUE, '');
                
                //次の記事へ
                next_post_link('%link', '<span>%title</span>', TRUE, '');
                ?>
            </div>
            <?php endif; ?>

        </div>
        <?php get_sidebar(); ?>
    </div>
    <div class="gotoTop">
        <a href="#" id="topButton">
            <div></div>
        </a>
    </div>
    <?php get_footer(); ?>