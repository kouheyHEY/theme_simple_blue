<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div class="content">
    <!-- メインコンテンツ -->
    <div class="main-content">
        <!-- コンテンツブロック -->
        <div class="content-block-area">
            <div class="content-title dashed-line">大カテゴリ名</div>
            <!-- 記事一覧 -->
            <div class="article-all">
                <!-- 記事ブロック -->
                <article class="article-index">
                    <a href="#">
                        <!-- 記事画像 -->
                        <div class="article-index-thumbnail">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/アイキャッチテスト.png" alt="記事画像1">
                        </div>
                        <!-- 記事情報 -->
                        <div class="abstract">
                            <!-- 記事タイトル -->   
                            <h2 class="article-index-title">タイトル1</h2>
                            <!-- 記事情報 -->
                            <div class="article-index-info">
                                <!-- カテゴリ -->
                                <span class="article-index-category">カテゴリ1</span>
                                <!-- 投稿日 -->
                                <span class="article-index-date">
                                    <time datetime="2022-05-19">2022/05/19</time>
                                </span>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
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