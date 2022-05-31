jQuery(document).ready(function () {
    // ボタンを非表示にする
    jQuery("#topButton").hide();

    jQuery(window).on("scroll", function () {

        if (jQuery(this).scrollTop() > 200) {
            // ページの上から200pxスクロールした場合

            // ボタンがフェードインする
            jQuery("#topButton").fadeIn("fast");
        } else {
            // そうでない場合

            // ボタンがフェードアウトする
            jQuery("#topButton").fadeOut("fast");
        }

        // ドキュメントの高さ
        scrollHeight = jQuery(document).height();

        // 現在の位置
        scrollPosition = jQuery(window).height() + jQuery(window).scrollTop();

        // 止めたい位置の高さ(今回はfooter)
        footHeight = jQuery("footer").innerHeight();

        if (scrollHeight - scrollPosition <= footHeight) {
            //ドキュメントの高さと現在の位置の差がfooterの高さ以下の場合

            // positionをabsoluteに変更
            jQuery("#topButton").css({
                "position": "absolute",
            });
        } else {
            // それ以外の場合

            // 固定表示
            jQuery("#topButton").css({
                "position": "fixed",
            });
        }
    });

    // スムーススクロール設定
    jQuery('#topButton').click(function () {

        // スムーススクロールの速度
        jQuery('body,html').animate({
            scrollTop: 0
        }, 500);

        return false;

    });
});