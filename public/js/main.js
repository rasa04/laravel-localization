!function(e){function t(t){for(var o,i,c=t[0],s=t[1],l=t[2],u=0,p=[];u<c.length;u++)i=c[u],Object.prototype.hasOwnProperty.call(r,i)&&r[i]&&p.push(r[i][0]),r[i]=0;for(o in s)Object.prototype.hasOwnProperty.call(s,o)&&(e[o]=s[o]);for(d&&d(t);p.length;)p.shift()();return a.push.apply(a,l||[]),n()}function n(){for(var e,t=0;t<a.length;t++){for(var n=a[t],o=!0,c=1;c<n.length;c++){var s=n[c];0!==r[s]&&(o=!1)}o&&(a.splice(t--,1),e=i(i.s=n[0]))}return e}var o={},r={0:0},a=[];function i(t){if(o[t])return o[t].exports;var n=o[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,i),n.l=!0,n.exports}i.m=e,i.c=o,i.d=function(e,t,n){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)i.d(n,o,function(t){return e[t]}.bind(null,o));return n},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="";var c=window.webpackJsonp=window.webpackJsonp||[],s=c.push.bind(c);c.push=t,c=c.slice();for(var l=0;l<c.length;l++)t(c[l]);var d=s;a.push([413,1]),n()}({412:function(e,t){function n(e){var t="is-active",n=$('.js-tab-block[data-id="'.concat(e,'"]'));$('.js-tab-link[href="'.concat(e,'"]')).addClass(t).siblings().removeClass(t),n.addClass(t).siblings().removeClass(t)}$(".js-tab-link").on("click",(function(e){e.preventDefault(),n($(e.currentTarget).attr("href"))})),$("select").on("change",(function(){n($(this).val())}))},413:function(e,t,n){"use strict";n.r(t);n(169),n(406);var o=n(165),r=n.n(o),a=n(54),i=n.n(a),c=n(119),s=n.n(c);r()(),s()(),window.$=i.a,window.jQuery=i.a,window.objectFitImages=s.a,n(407),n(408),n(409);var l=n(7),d=n(166),u=n.n(d);if(document.querySelector("[data-social]")){var p=document.querySelectorAll("[data-social]");Array.prototype.forEach.call(p,(function(e){e.addEventListener("click",(function(e){var t=e.currentTarget.dataset.social,n=location.origin+location.pathname;u.a[t](n)}))}))}var h=function(e,t){document.addEventListener("keydown",(function(n){27==n.keyCode&&($(e).removeClass("is-active"),t&&$(e).fadeOut())})),$(document).mouseup((function(n){e.is(n.target)||0!==e.has(n.target).length||(e.removeClass("is-active"),t&&$(e).fadeOut())}))},m=$(".js-lang");m.on("click",(function(e){$(e.currentTarget).toggleClass("is-active")})),h(m);var f,v=n(37),b=(new v.d(".services-section .swiper",{modules:[v.b,v.c,v.a],loop:!0,slidesPerView:1.2,spaceBetween:0,autoplay:{delay:3e3},pagination:{el:".services-section .swiper-pagination",clickable:!0},navigation:{nextEl:".services-section .swiper-button-next",prevEl:".services-section .swiper-button-prev"},breakpoints:{768:{slidesPerView:2},1024:{slidesPerView:3},1200:{slidesPerView:4}}}),!1);function w(){window.innerWidth>=768?b||(b=!0,f=new v.d(".clients .swiper",{modules:[v.b,v.c,v.a],loop:!0,slidesPerView:1,spaceBetween:30,autoplay:{delay:3e3},pagination:{el:".clients .swiper-pagination",clickable:!0},navigation:{nextEl:".clients .swiper-button-next",prevEl:".clients .swiper-button-prev"},breakpoints:{768:{slidesPerView:5}}})):b&&(f.destroy(),b=!1)}w(),window.addEventListener("resize",w);var g=$(".js-project");function y(e){var t,n,o,r,a=$(e.currentTarget),i=a.data("image"),c=a.data("title"),s=a.data("subtitle"),l=a.data("link");t=i,n=c,o=s,r=l,$("body").append('\n    <div class="modal" id="project-modal" style="display:block;">\n      <div class="modal__wrapper">\n        <button type="button" class="modal__close btn js-close-modal"><span class="sr-only">close</span></button>\n        <div class="modal__block">\n          <div class="modal__header">\n            '.concat(t&&null!=t?'<img class="modal__image" src="'.concat(t,'" alt="').concat(n,'"/>'):"",'\n          </div>\n          <div class="modal__body">\n            ').concat(r&&null!=r?'<a class="modal__link" href="'.concat(r,'" target="__blank" rel="nofollow">').concat(r,"</a>"):"","\n            ").concat(n&&null!=n?'<h2 class="modal__title">'.concat(n||"","</h2>"):"","\n            ").concat(o&&null!=o?'<p class="modal__subtitle">'.concat(o,"</p>"):"","\n          </div>\n        </div>\n      </div>\n    </div>\n  ")),$(".js-close-modal").on("click",E)}function C(){l.a.$body.addClass("modal-is-open"),l.a.lockScroll(!0,l.a.$body.find(".modal"))}function E(){$(".modal").fadeOut(),l.a.$body.removeClass("modal-is-open"),l.a.lockScroll(!1,l.a.$body.find(".modal")),setTimeout((function(){$("#project-modal").remove()}),1e3)}$(".js-close-modal").on("click",E),g.on("click",(function(e){y(e),C()})),document.addEventListener("keydown",(function(e){27==e.keyCode&&E()})),$(".js-open-modal").on("click",(function(e){e.preventDefault();var t=$(e.currentTarget).attr("href");$(t).fadeIn(),C()}));n(412);var S,k=n(88),j=n(167),_=n.n(j),x=function(){_()(".js-lazy",{rootMargin:"10px 0px",threshold:.1,enableAutoReload:!0,loaded:function(e){e.classList.add("is-loaded")}}).observe()},M=function(){l.a.$document.on("click.anchor",".js-to-anchor",(function(e){e.preventDefault(),e.stopPropagation();var t=$(e.currentTarget).attr("href"),n=$(e.currentTarget).data("speed")||500,o="fixed"===l.a.$header.css("position")||"absolute"===l.a.$header.css("position")?-l.a.$header.outerHeight(!0):0;k.a.closeMenu().then((function(){$(".js-burger").removeClass("is-active"),l.a.scrollTo($(t),n,o)}))}))},T=n(168),O=n.n(T);!function(){!function(){if("performance"in window==0&&(window.performance={}),Date.now=Date.now||function(){return(new Date).getTime()},"now"in window.performance==0){var e=Date.now();performance.timing&&performance.timing.navigationStart&&(e=performance.timing.navigationStart),window.performance.now=function(){return Date.now()-e}}}(),window.NodeList&&!NodeList.prototype.forEach&&(NodeList.prototype.forEach=function(e,t){t=t||window;for(var n=0;n<this.length;n++)e.call(t,this[n],n,this)}),function(){if("function"==typeof window.CustomEvent)return!1;function e(e,t){t=t||{bubbles:!1,cancelable:!1,detail:void 0};var n=document.createEvent("CustomEvent");return n.initCustomEvent(e,t.bubbles,t.cancelable,t.detail),n}e.prototype=window.Event.prototype,window.CustomEvent=e}(),Array.prototype.includes||Object.defineProperty(Array.prototype,"includes",{value:function(e,t){if(null==this)throw new TypeError('"this" is null or not defined');var n=Object(this),o=n.length>>>0;if(0===o)return!1;var r,a,i=0|t,c=Math.max(i>=0?i:o-Math.abs(i),0);for(;c<o;){if((r=n[c])===(a=e)||"number"==typeof r&&"number"==typeof a&&isNaN(r)&&isNaN(a))return!0;c++}return!1}}),Element.prototype.matches||(Element.prototype.matches=Element.prototype.matchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector||Element.prototype.oMatchesSelector||Element.prototype.webkitMatchesSelector||function(e){for(var t=(this.document||this.ownerDocument).querySelectorAll(e),n=t.length;--n>=0&&t.item(n)!==this;);return n>-1}),Element.prototype.matches||(Element.prototype.matches=Element.prototype.msMatchesSelector||Element.prototype.webkitMatchesSelector),Element.prototype.closest||(Element.prototype.closest=function(e){var t=this;do{if(t.matches(e))return t;t=t.parentElement||t.parentNode}while(null!==t&&1===t.nodeType);return null}),[Element.prototype,Document.prototype,DocumentFragment.prototype].forEach((function(e){e.hasOwnProperty("prepend")||Object.defineProperty(e,"prepend",{configurable:!0,enumerable:!0,writable:!0,value:function(){var e=Array.prototype.slice.call(arguments),t=document.createDocumentFragment();e.forEach((function(e){var n=e instanceof Node;t.appendChild(n?e:document.createTextNode(String(e)))})),this.insertBefore(t,this.firstChild)}})})),[Element.prototype,Document.prototype,DocumentFragment.prototype].forEach((function(e){e.hasOwnProperty("append")||Object.defineProperty(e,"append",{configurable:!0,enumerable:!0,writable:!0,value:function(){var e=Array.prototype.slice.call(arguments),t=document.createDocumentFragment();e.forEach((function(e){var n=e instanceof Node;t.appendChild(n?e:document.createTextNode(String(e)))})),this.appendChild(t)}})})),[Element.prototype,CharacterData.prototype,DocumentType.prototype].forEach((function(e){e.hasOwnProperty("before")||Object.defineProperty(e,"before",{configurable:!0,enumerable:!0,writable:!0,value:function(){var e=Array.prototype.slice.call(arguments),t=document.createDocumentFragment();e.forEach((function(e){var n=e instanceof Node;t.appendChild(n?e:document.createTextNode(String(e)))})),this.parentNode.insertBefore(t,this)}})})),[Element.prototype,CharacterData.prototype,DocumentType.prototype].forEach((function(e){e.hasOwnProperty("remove")||Object.defineProperty(e,"remove",{configurable:!0,enumerable:!0,writable:!0,value:function(){null!==this.parentNode&&this.parentNode.removeChild(this)}})})),String.prototype.startsWith||Object.defineProperty(String.prototype,"startsWith",{value:function(e,t){var n=t>0?0|t:0;return this.substring(n,n+e.length)===e}});if(window.navigator.msSaveBlob){var e=document.querySelectorAll("a[download]");e.length&&e.forEach((function(e){!function(e){if(""===e.href)throw Error("The element has no href value.");var t=e.getAttribute("download");if(null===t||""===t){var n=e.href.split("/");t=n[n.length-1]}e.addEventListener("click",(function(n){n.preventDefault();var o=new XMLHttpRequest;o.onloadstart=function(){o.responseType="blob"},o.onload=function(){navigator.msSaveOrOpenBlob(o.response,t)},o.open("GET",e.href,!0),o.send()}))}(e)}))}window.MSInputMethodContext&&document.documentMode&&document.querySelectorAll("svg").forEach((function(e){e.setAttribute("focusable","false")}));!function(){var e,t,n,o=document.querySelector("main"),r=document.querySelector(".header"),a=document.querySelector(".footer");if(o&&window.MSInputMethodContext&&document.documentMode){var i=function(){e=r?r.getBoundingClientRect().height:0,t=a?a.getBoundingClientRect().height:0,n=window.innerHeight,o.style.minHeight=n-(e+t)+"px"};document.addEventListener("loadDOMContentLoaded",i()),window.addEventListener("resize",i)}}()}(),function(){if(!window.MSInputMethodContext||!document.documentMode){var e=window.innerHeight;document.documentElement.style.setProperty("--vh","".concat(e,"px")),window.addEventListener("resize",(function(){e=window.innerHeight,document.documentElement.style.setProperty("--vh","".concat(e,"px"))}))}}(),S=(new Date).getFullYear(),document.querySelector("[data-actual-year]")&&(document.querySelector("[data-actual-year]").textContent=S),M(),k.a.init(),x(),O.a.init({duration:1500}),$("select").customSelect()},7:function(e,t,n){"use strict";(function(e){var o,r,a=n(89),i={};function c(){return!(!i.isIE||!i.getScrollbarWidth())||!i.isMobile()&&(!(!window.matchMedia("(any-hover: hover)").matches&&!window.matchMedia("(hover: hover)").matches)||!window.matchMedia("(hover: none)").matches&&void 0===i.$html.ontouchstart)}i.$document=$(document),i.$window=$(window),i.$body=$(document.body),i.$html=$(document.documentElement),i.isMobile=function(){return innerWidth<=1024},i.isIE=function(){return i.$html.hasClass("is-browser-ie")},i.isIOS=function(){return i.$html.hasClass("is-os-ios")},i.winWidth=window.innerWidth,i.clearText=function(e){return e.trim().replace(/\s+/g," ")},i.setCookie=function(e,t,n){var o="";if(n){var r=new Date;r.setTime(r.getTime()+24*n*60*60*1e3),o="; expires=".concat(r.toUTCString())}document.cookie="".concat(e,"=").concat(t||"").concat(o,"; path=/")},i.getCookie=function(e){for(var t="".concat(e,"="),n=document.cookie.split(";"),o=0;o<n.length;o++){for(var r=n[o];" "===r.charAt(0);)r=r.substring(1,r.length);if(0===r.indexOf(t))return r.substring(t.length,r.length)}return null},i.eraseCookie=function(e){document.cookie="".concat(e,"=; Max-Age=-99999999;")},i.lockScroll=function(t,n,r){var c=n.get(0)?n.get(0):n;void 0===o&&(o=new Set);var s=o;t?("string"==typeof r&&s.add(r),a.b(c,{reserveScrollBarGap:!0}),e((function(){i.$html.addClass("is-lock-scroll")}))):("string"==typeof r&&s.delete(r),a.c(c),s.size||(a.a(),i.$html.removeClass("is-lock-scroll")))},i.scrollTo=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:500,n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0;i.$html.css("scroll-behavior","initial"),$("html, body").stop().animate({scrollTop:"".concat(e.offset().top+parseInt(n,10))},parseInt(t,10)),setTimeout((function(){i.$html.css("scroll-behavior","")}),parseInt(t,10)+100)},i.getScrollbarWidth=function(){var e=window.innerWidth-i.$html.get(0).clientWidth;return e||document.documentElement.clientHeight>=document.documentElement.offsetHeight?e:(r||((r=document.createElement("div")).style.cssText="width:100px;height:100px;overflow:scroll !important;position:absolute;top:-9999px",document.body.appendChild(r)),r.offsetWidth-r.clientWidth)},c()?i.$html.removeClass("no-hover").addClass("has-hover"):i.$html.removeClass("has-hover").addClass("no-hover"),i.$window.on("resize",(function(){setTimeout((function(){i.winWidth!==window.innerWidth&&(c()?i.$html.removeClass("no-hover").addClass("has-hover"):i.$html.removeClass("has-hover").addClass("no-hover"),i.winWidth=window.innerWidth)}),300)})),t.a=i}).call(this,n(164).setImmediate)},88:function(e,t,n){"use strict";(function(e){var o=n(7);function r(){return new Promise((function(t){$(".js-burger").addClass("is-disabled").attr("disabled",!0),o.a.lockScroll(!0,o.a.$header.find(".header__menu"),"header"),o.a.$header.addClass("is-menu-opened"),$(".header__menu").removeClass("is-hidden"),e((function(){o.a.$body.css("padding-right","".concat(o.a.getScrollbarWidth(),"px")),o.a.$header.css("right","".concat(o.a.getScrollbarWidth(),"px"))})),setTimeout((function(){$(".header__menu").addClass("is-active"),$(".js-burger").removeClass("is-disabled").attr("disabled",!1),t()}),100)}))}function a(){return new Promise((function(e){$(".js-burger").addClass("is-disabled").attr("disabled",!0),o.a.lockScroll(!1,o.a.$header.find(".header__menu"),"header"),o.a.$body.css("padding-right",""),o.a.$header.css("right",""),o.a.$header.removeClass("is-menu-opened"),$(".header__menu").removeClass("is-active"),setTimeout((function(){$(".header__menu").addClass("is-hidden"),$(".js-burger").removeClass("is-disabled").attr("disabled",!1),e()}),500)}))}function i(e){e.preventDefault(),e.stopPropagation(),$(".js-burger").hasClass("is-active")?($(".js-burger").removeClass("is-active"),a()):($(".js-burger").addClass("is-active"),r())}t.a={init:function(){o.a.$header=$(".header"),$(".js-burger").on("click.header",i),o.a.$document.on("click.header",(function(e){var t=$(".header__menu");t.is(e.target)&&0===t.has(e.target).length&&t.hasClass("is-active")&&(a(),$(".js-burger").removeClass("is-active"))})).on("keyup.header",(function(e){"Escape"!==e.key&&"Esc"!==e.key||!$(".header__menu").hasClass("is-active")||(a(),$(".js-burger").removeClass("is-active"))}))},destroy:function(){$(".js-burger").off(".header"),o.a.$document.off(".header")},openMenu:r,closeMenu:a}}).call(this,n(164).setImmediate)}});