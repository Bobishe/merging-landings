window.addEventListener('resize', function () {
    var screenWidth = window.innerWidth;

    if (screenWidth > 992) {
        var myBtn = document.getElementById('my_btn');
        if (myBtn) {
            myBtn.style.display = 'block';
        }
    } else {
        var myBtn = document.getElementById('my_btn');
        if (myBtn) {
            myBtn.style.display = 'none';
        }
    }
});

// Выполним проверку и при загрузке страницы
var initialScreenWidth = window.innerWidth;
if (initialScreenWidth > 992) {
    var myBtn = document.getElementById('my_btn');
    if (myBtn) {
        myBtn.style.display = 'block';
    }
}

