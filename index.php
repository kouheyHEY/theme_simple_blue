    <?php get_header(); ?>
    <div class="content">
        <div class="main-content">
            <div class="content-block-area">
                <div class="content-title dashed-line">大カテゴリ名</div>
                <!-- <nav class="navbar">
                    <div class="main-navbar">
                        <ul>
                            <li><a href="new"><span>新着記事</span></a></li>
                            <li><a href="recommend"><span>オススメ</span></a></li>
                            <li><a href="ranking"><span>ランキング</span></a></li>
                        </ul>
                    </div>
                </nav> -->
                <div class="article-all">
                    <article class="article-index">
                        <a href="#">
                            <div class="article-index-thumbnail">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/アイキャッチテスト.png" alt="記事画像1">
                            </div>
                            <div class="abstract">
                                <h2 class="article-index-title">タイトル1</h2>
                                <div class="article-index-info">
                                    <span class="article-index-date">
                                        <time datetime="2022-05-19">2022/05/19</time>
                                    </span>
                                    <span class="article-index-category">カテゴリ1</span>
                                </div>
                            </div>
                        </a>
                    </article>


                    
                    <article class="article-index">
                        <a href="#">
                            <div class="article-index-thumbnail">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/アイキャッチテスト.png" alt="記事画像4">
                            </div>
                            <div class="abstract">
                                <h2 class="article-index-title">タイトル4</h2>
                                <span class="article-index-date">
                                    <time datetime="2022-05-22">2022/05/22</time>
                                </span>
                                <span class="article-index-category">カテゴリ4</span>
                            </div>
                        </a>
                    </article>
                </div>
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