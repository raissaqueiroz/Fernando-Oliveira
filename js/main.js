/**
 * @license
 * lodash (Custom Build) /license | Underscore.js 1.8.3 underscorejs.org/LICENSE
 * Build: `lodash include="debounce,throttle"`
 */
;(function(){function t(){}function e(t,e,n){function r(e){var n=d,o=g;return d=g=f,h=e,v=t.apply(o,n)}function i(t){return h=t,x=setTimeout(p,e),T?r(t):v}function c(t){var n=t-O,o=t-h,r=e-n;return S?E(r,j-o):r}function l(t){var n=t-O,o=t-h;return O===f||n>=e||n<0||S&&o>=j}function p(){var t=N();return l(t)?s(t):(x=setTimeout(p,c(t)),f)}function s(t){return x=f,$&&d?r(t):(d=g=f,v)}function b(){x!==f&&clearTimeout(x),h=0,d=O=g=x=f}function y(){return x===f?v:s(N())}function m(){var t=N(),n=l(t);if(d=arguments,
g=this,O=t,n){if(x===f)return i(O);if(S)return x=setTimeout(p,e),r(O)}return x===f&&(x=setTimeout(p,e)),v}var d,g,j,v,x,O,h=0,T=false,S=false,$=true;if(typeof t!="function")throw new TypeError(a);return e=u(e)||0,o(n)&&(T=!!n.leading,S="maxWait"in n,j=S?w(u(n.maxWait)||0,e):j,$="trailing"in n?!!n.trailing:$),m.cancel=b,m.flush=y,m}function n(t,n,r){var i=true,u=true;if(typeof t!="function")throw new TypeError(a);return o(r)&&(i="leading"in r?!!r.leading:i,u="trailing"in r?!!r.trailing:u),e(t,n,{leading:i,maxWait:n,
trailing:u})}function o(t){var e=typeof t;return!!t&&("object"==e||"function"==e)}function r(t){return!!t&&typeof t=="object"}function i(t){return typeof t=="symbol"||r(t)&&T.call(t)==p}function u(t){if(typeof t=="number")return t;if(i(t))return l;if(o(t)){var e=typeof t.valueOf=="function"?t.valueOf():t;t=o(e)?e+"":e}if(typeof t!="string")return 0===t?t:+t;t=t.replace(s,"");var n=y.test(t);return n||m.test(t)?d(t.slice(2),n?2:8):b.test(t)?l:+t}var f,c="4.15.0",a="Expected a function",l=NaN,p="[object Symbol]",s=/^\s+|\s+$/g,b=/^[-+]0x[0-9a-f]+$/i,y=/^0b[01]+$/i,m=/^0o[0-7]+$/i,d=parseInt,g=typeof global=="object"&&global&&global.Object===Object&&global,j=typeof self=="object"&&self&&self.Object===Object&&self,v=g||j||Function("return this")(),x=typeof exports=="object"&&exports&&!exports.nodeType&&exports,O=x&&typeof module=="object"&&module&&!module.nodeType&&module,h=Object.prototype,T=h.toString,w=Math.max,E=Math.min,N=function(){
return v.Date.now()};t.debounce=e,t.throttle=n,t.isObject=o,t.isObjectLike=r,t.isSymbol=i,t.now=N,t.toNumber=u,t.VERSION=c,typeof define=="function"&&typeof define.amd=="object"&&define.amd?(v._=t, define(function(){return t})):O?((O.exports=t)._=t,x._=t):v._=t}).call(this);



$('nav a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
	
	// Adiciona a classe active ao menu
	$(this).addClass('active');
	
	$('html, body').animate({ 
		scrollTop: targetOffset
	}, 500);
});

// Usando a biblioteca loadash para incluir o debounce, assim a função de scroll não é ativada diversas vezes
// https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.15.0/lodash.min.js

// Função abaixo adiciona o active ao item do menu de acordo com a área que estiver na tela do usuário

$(document).on('scroll', _.debounce(function() {
	$('.propriedade').each(function() {
		var id = $(this).attr('id'),
				areaHeight = $(this).outerHeight(),
				offset = $(this).offset().top,
				ajuste = window.innerHeight / 3,
				maxArea = offset + areaHeight,
				documentTop = $(document).scrollTop() + ajuste;
		if(documentTop > offset && documentTop < maxArea) {
			$('a[href="#' + id + '"]').addClass('active');
		} else {
			$('a[href="#' + id + '"]').removeClass('active')
		}
	});
}, 200));