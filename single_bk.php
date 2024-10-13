<!-- 記事の投稿内容を表示するファイル -->
<!-- ヘッダー -->
<?php get_header(); ?>

<!-- コンテンツ -->
<div class="content">
    <!-- メインコンテンツ -->
    <div class="main-content">
        <!-- コンテンツブロック -->
        <div class="content-block-area">
            <div class="content-title dashed-line"><?php the_title(); ?></div>
            <!-- コンテンツ内容表示 -->
            <div class="content-detail">
                <?php the_content(); ?>
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