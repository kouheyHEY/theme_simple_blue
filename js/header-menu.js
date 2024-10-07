document.addEventListener('DOMContentLoaded', function () {
    var menuItems = document.querySelectorAll('.navbar .has-submenu > a');

    menuItems.forEach(function (item) {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            var submenu = this.nextElementSibling;

            // 他のすべてのサブメニューを閉じる
            document.querySelectorAll('.navbar .submenu').forEach(function (menu) {
                if (menu !== submenu) {
                    menu.classList.remove('active');
                }
            });

            // クリックされたメニューのサブメニューを切り替える
            submenu.classList.toggle('active');
        });
    });

    // メニュー外をクリックしたときにサブメニューを閉じる
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.navbar')) {
            document.querySelectorAll('.navbar .submenu').forEach(function (menu) {
                menu.classList.remove('active');
            });
        }
    });
});