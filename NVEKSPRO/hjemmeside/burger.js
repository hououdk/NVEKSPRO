// JavaScript Document

$('button').click(function() {
	$(this).toggleClass('expanded').siblings('div').slideToggle(400);
}
);


// zoom fix til ios 10
document.addEventListener('touchmove', function (event) {
  if (event.scale !== 1) { event.preventDefault(); }
}, false);

var lastTouchEnd = 0;
document.addEventListener('touchend', function (event) {
  var now = (new Date()).getTime();
  if (now - lastTouchEnd <= 300) {
    event.preventDefault();
  }
  lastTouchEnd = now;
}, false);