<!-- <?php
// 自動整形機能を無効化する
remove_filter('the_content', 'wpautop');

// 特定の投稿タイプに対して無効化したい場合は以下のコードを使用
function disable_wpautop_for_post_type($content) {
    if (is_singular('your_post_type')) { // 'your_post_type'を対象の投稿タイプに変更
        remove_filter('the_content', 'wpautop');
    }
    return $content;
}
add_filter('the_content', 'disable_wpautop_for_post_type', 9);

// カスタムフィールドを使用して自動整形を制御する場合
function disable_wpautop_on_custom_field($content) {
    if (get_post_meta(get_the_ID(), 'disable_autop', true)) {
        remove_filter('the_content', 'wpautop');
    }
    return $content;
}
add_filter('the_content', 'disable_wpautop_on_custom_field', 9);

?> -->