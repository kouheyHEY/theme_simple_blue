<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>元エンジニア、休憩中</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mystyle.css">
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
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
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">WORKS</a></li>
                    <li><a href="#">SEARCH</a></li>
                </ul>
            </div>
        </nav>
    </header>