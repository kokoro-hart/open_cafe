/**
 * @modules : node_modulesフォルダまでの絶対パスのエイリアス
 * webpack.config.jsにて定義している
 */

//SVGスプライト
import '@modules/svgxuse';
//ブラウザ判定
import './lib/b_browser_switcher.js';
//line-clamp
import './lib/clamp.js';


import './common'

import './modules/swiper'
import './modules/drawer'