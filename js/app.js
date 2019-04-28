'use strict';

var value = window.devicePixelRatio;
// alert(value);

function isRetina() {
  console.log('retina');
  return 'devicePixelRatio' in window && devicePixelRatio > 1;
};

isRetina();

//
// $(function isRetina() {
// 	return ('devicePixelRatio' in window
// 	    && devicePixelRatio > 1);
// });
//# sourceMappingURL=../js/app.js.map