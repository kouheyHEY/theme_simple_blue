<!-- サイドバー -->
<div class="side-bar">
    <!-- サイト内検索 -->
    <div class="side-search content-block-area">
        <div class="content-title dashed-line">サイト内検索</div>
        <div class="side-search-bar">
            <form action="#" method="get">
                <input type="text" placeholder="キーワードを入力">
                <button type="submit">検索</button>
            </form>
        </div>
    </div>
    <!-- プロフィール -->
    <div class="side-profile content-block-area">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/プロフィールテスト.png" alt="プロフィール画像">
        <div class="side-profile-abstract">20代元エンジニア。現在は事務職として働く傍らブログ執筆をのんびりやっています。</div>
        <div class="side-profile-sns">
            <div class="sns-link" id="link-instagram"><a href="#">Instagram</a></div>
        </div>
    </div>
    <!-- 新着記事 -->
    <div class="side-new-article content-block-area">
        <div class="content-title dashed-line">新着記事</div>
        <div class="side-content-list">
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
                        <h2 class="article-index-title">みなみが買ってよかったもの38選！</h2>
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