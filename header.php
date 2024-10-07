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
        <div class="header-title">
            <a href="#">
                <span class="title">元エンジニア、休憩中</span>
                <span class="title-explanation">元エンジニア（とその仲間）の創作物や日常を発信するブログです。</span>
            </a>
        </div>
        <nav class="navbar">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <div class="header-navbar">
                <ul>
                    <li><a href="#">New</a></li>
                    <li class="has-submenu">
                        <a href="#">Lifestyle</a>
                        <ul class="submenu">
                            <li><a href="#">Themepark</a></li>
                            <li><a href="#">Diary</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Reviews</a>
                        <ul class="submenu">
                            <li><a href="#">Cosmetics</a></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Products</a>
                        <ul class="submenu">
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Tools</a></li>
                            <li><a href="#">Tech</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>