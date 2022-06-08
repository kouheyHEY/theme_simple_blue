        <div class="side-bar">
            <div class="side-search content-block-area">
                <div class="content-title">ブログ内検索</div>
                <div class="side-search-bar">
                    <form action="#" method="get">
                        <input type="text" placeholder="キーワードを入力...">
                        <button type="submit">検索</button>
                    </form>
                </div>
            </div>
            <div class="side-profile content-block-area">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/プロフィールテスト.png" alt="プロフィール画像">
                <div class="side-profile-abstract">25歳元システムエンジニア。フルスタックエンジニアを目指して日々勉強中。</div>
            </div>
            <div class="category-list content-block-area">
                <div class="content-title">カテゴリー</div>
                <nav class="navbar-category">
                    <div>
                        <ul>
                            <li>
                                <a href="javascript">
                                    <div class="category-info">
                                        <div class="category-name"><span>javascript</span>(<span>4</span>)</div>
                                        <div class="category-arrow-wrap">
                                            <div class="category-arrow"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="PHP">
                                    <div class="category-info">
                                        <div class="category-name"><span>PHP</span>(<span>2</span>)</div>
                                        <div class="category-arrow-wrap">
                                            <div class="category-arrow"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="ラーメン">
                                    <div class="category-info">
                                        <div class="category-name"><span>ラーメン</span>(<span>3</span>)</div>
                                        <div class="category-arrow-wrap">
                                            <div class="category-arrow"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="side-archive content-block-area">
                <div class="content-title">アーカイブ</div>
                <div class="side-archive-bar">
                    <form action="#" method="get">
                        <select name="archive-select-form">
                            <option value="0000_00">月を選択</option>
                            <option value="2022_05">2022年5月</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="side-new-article content-block-area">
                <div class="content-title">新着記事</div>
                <div class="side-content-list">
                    <a href="#" class="side-content-block">
                        <div class="side-content-abstract">
                            <span class="side-content-category">カテゴリ1</span>
                            <div class="side-content-article-title">タイトル1タイトル1タイトル1タイトル1</div>
                        </div>
                    </a>
                    <a href="#" class="side-content-block">
                        <div class="side-content-abstract">
                            <span class="side-content-category">カテゴリ2</span>
                            <div class="side-content-article-title">タイトル2</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>