    <?php get_header(); ?>
    <div class="contains">
        <div class="main-contains">
            <div class="side-content-title">
                記事一覧
            </div>
            <nav class="navbar">
                <div class="main-navbar">
                    <ul>
                        <li><a href="new"><span>新着記事</span></a></li>
                        <li><a href="recommend"><span>オススメ</span></a></li>
                        <li><a href="ranking"><span>ランキング</span></a></li>
                    </ul>
                </div>
            </nav>
            <?php 
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
            ?>
                    <h1><?php the_title(); ?></h1>
                    <section>
                        <?php the_content(); ?>
                    </section>
            <?php 
                endwhile;
            endif;
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
    <div class="gotoTop">
        <a href="#" id="topButton">
            <div></div>
        </a>
    </div>
    <?php get_footer(); ?>