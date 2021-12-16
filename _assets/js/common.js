
//intersection observer polyfill 
import '@modules/intersection-observer';

//画像遅延読み込み
const lazy = document.querySelectorAll('.lazyload');
const lazyObserver = new IntersectionObserver(inViewport, {
  rootMargin: '50%',
  threshold: [0]
});

Array.from(lazy).forEach(element => {
  lazyObserver.observe(element);
});

function inViewport(entries, observer) {
  entries.forEach(entry => {

    if (entry.intersectionRatio > 0) {
      const imgElement = entry.target;
      imgElement.src = imgElement.dataset.src;

      imgElement.addEventListener('load', () => {
        imgElement.classList.add('is-lazyloaded');
      });

      lazyObserver.unobserve(entry.target);
    }
  });
}

//デバイス幅360px以下はリサイズして表示
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})();

// タッチデバイスの場合:hover無効化
const touch = 'ontouchstart' in document.documentElement || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
if (touch) {
  try {
    for (let si in document.styleSheets) {
      const styleSheet = document.styleSheets[si];
      if (!styleSheet.rules) continue;

      for (let ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
        if (!styleSheet.rules[ri].selectorText) continue;

        if (styleSheet.rules[ri].selectorText.match(':hover')) {
          styleSheet.deleteRule(ri);
        }
      }
    }
  } catch (ex) { }
}