$(document).ready(function () {
    // ボタンを非表示にする
    $("#topButton").hide();

    $(window).on("scroll", function () {

        if ($(this).scrollTop() > 200) {
            // ページの上から200pxスクロールした場合

            // ボタンがフェードインする
            $("#topButton").fadeIn("fast");
        } else {
            // そうでない場合

            // ボタンがフェードアウトする
            $("#topButton").fadeOut("fast");
        }

        // ドキュメントの高さ
        scrollHeight = $(document).height();

        // 現在の位置
        scrollPosition = $(window).height() + $(window).scrollTop();

        // 止めたい位置の高さ(今回はfooter)
        footHeight = $("footer").innerHeight();

        if (scrollHeight - scrollPosition <= footHeight) {
            //ドキュメントの高さと現在の位置の差がfooterの高さ以下の場合

            // positionをabsoluteに変更
            $("#topButton").css({
                "position": "absolute",
            });
        } else {
            // それ以外の場合

            // 固定表示
            $("#topButton").css({
                "position": "fixed",
            });
        }
    });

    // スムーススクロール設定
    $('#topButton').click(function () {

        // スムーススクロールの速度
        $('body,html').animate({
            scrollTop: 0
        }, 500);

        return false;

    });
});