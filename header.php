<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>元エンジニア、休憩中</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- リセットCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <!-- 共通CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mystyle.css">
    <!-- ヘッダーCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
    <!-- 記事CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/article.css">
    <!-- サイドバーCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css">
    <!-- フッターCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <!-- jQuery -->
    <?php wp_enqueue_script('jquery'); ?>
    <!-- WordPressのヘッダー情報 -->
    <?php wp_head(); ?>

    <!-- ヘッダーメニューの表示用js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/header-menu.js"></script>
</head>

<body>
    <header>
        <!-- ヘッダータイトル -->
        <div class="header-title">
            <a href="#">
                <span class="title">No Magic, No Life</span>
                <span class="title-explanation">説明説明説明説明説明説明説明説明説明説明説明説明。</span>
            </a>
        </div>
        <!-- ヘッダーメニュー -->
        <nav class="navbar">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <div class="header-navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="has-submenu">
                        <a href="#">Lifestyle</a>
                        <ul class="submenu">
                            <li><a href="#">Themepark</a></li>
                            <li><a href="#">Diary</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Review</a>
                        <ul class="submenu">
                            <li><a href="#">Cosmetic</a></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>