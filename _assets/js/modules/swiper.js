if (document.getElementById('js-slider')) {
  const swiperMv = new Swiper('.swiper-mv', {
    // Optional parameters
    speed: 2000, // スライドが切り替わる時の速さ
    slidesPerView: '1', // スライド表示数
    effect: "fade", // フェードさせる
    loop: true,
    autoplay: { // 自動再生 ON
      delay: 4000, // 次のスライドまでの秒数
      disableOnInteraction: false, //スライダー操作後、自動再生が止まるかどうか
    },
    fadeEffect: {
      crossFade: true // クロスフェードさせる
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
  });
}