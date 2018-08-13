(function initialize() {
	$('select').formSelect();
	$('.tooltipped').tooltip();
	$('input#input_text, textarea#caption').characterCounter();
})();

(function contentsFullHeight() {
	const value = $(document).innerHeight() - $('#contents').offset().top
	if($(document).innerWidth() > 600) {
		$('.content-left').css('height', value), $('.content-middle').css('height', value), $('.content-right').css('height', value);
	}

	/* Content - Middle */
	const showImg = $('.show-image');
	setTimeout(function(){
		showImg.children()[1].style.lineHeight=showImg.innerHeight()+'px';
	}, 100);
})();

$(window).bind('resize', function(e)
{
  if (window.RT) clearTimeout(window.RT);
  window.RT = setTimeout(function()
  {
    this.location.reload(false);
  }, 100);
});