// クリックイベントのリスナーを'img__btn'クラスを持つ要素に追加
document.querySelector('.img__btn').addEventListener('click', function () {
    // 'cont'クラスを持つ要素を取得し、そのクラスに's--signup'をトグルする
    document.querySelector('.cont').classList.toggle('s--signup');
});