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
            <!-- カテゴリパスの表示 -->
            <div class="category-path">
                <?php
                // カテゴリーを取得
                $categories = get_categories(array(
                    'hide_empty' => true,
                ));
                
                // カテゴリーが取得できた場合
                if ( !empty( $categories ) ) {

                    // for文を使ってカテゴリーをループ処理
                    for ($i = 0; $i < count($categories); $i++) {
                        $category = $categories[$i];
                        echo '<span><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></span>';
                        
                        // 最後のカテゴリー以外に区切り用の文字（例えば「|」）を挿入
                        if ($i < count($categories) - 1) {
                            echo ' > ';
                        }
                    }
                }
                ?>
            </div>
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