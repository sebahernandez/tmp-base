// efecto de la tarjeta
if ('addEventListener' in window) {
  window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
  document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
}

// slider
jQuery('.slider_avatar').slick({
  arrows: false,
  dots: false,
  autoplay: true,
  autoplaySpeed: 4000,
  fade: true,
});