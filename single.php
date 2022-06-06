    <?php get_header(); ?>
    <div class="content">
        <div class="main-content">
            <div class="content-block-area">
                <?php 
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                ?>
                        <div class="content-title"><?php the_title(); ?></div>
                        <section class="content-detail">
                            記事内容です<br/><?php the_content(); ?>
                        </section>
                <?php 
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
    <div class="gotoTop">
        <a href="#" id="topButton">
            <div></div>
        </a>
    </div>
    <?php get_footer(); ?>