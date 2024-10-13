<!-- 汎用的なテンプレートファイル -->
<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div class="content">
    <!-- メインコンテンツ -->
    <div class="main-content">
        <!-- コンテンツブロック -->
        <div class="content-block-area">
            <div class="content-title dashed-line">大カテゴリ名</div>
            <!-- 記事がある場合は記事一覧を表示 -->
            <?php if ( have_posts() ) : ?>
            <!-- 記事一覧 -->
            <div class="article-all">
                <?php while ( have_posts() ) : the_post(); ?>
                <!-- 記事ブロック -->
                <article class="article-index">
                    <a href="<?php the_permalink(); ?>">
                        <object class="anchor-wrapper">
                            <!-- 記事画像 -->
                            <div class="article-index-thumbnail">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/アイキャッチテスト.png" alt="記事画像1">
                            </div>
                            <!-- 記事情報 -->
                            <div class="abstract">
                                <!-- 記事タイトル -->   
                                <h2 class="article-index-title"><?php the_title(); ?></h2>
                                <!-- 記事情報 -->
                                <div class="article-index-info">
                                    <!-- カテゴリ -->
                                    <span class="article-index-category"><?php the_category(); ?></span>
                                    <!-- 投稿日 -->
                                    <span class="article-index-date">
                                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                                    </span>
                                </div>
                            </div>
                        </object>
                    </a>
                </article>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- サイドバー -->
    <?php get_sidebar(); ?>
</div>
<!-- トップへ戻るボタン -->
<div class="gotoTop">
    <a href="#" id="topButton">
        <div></div>
    </a>
</div>
<!-- フッター -->
<?php get_footer(); ?>