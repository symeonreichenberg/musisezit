var $document = $(document), $brand = $('#brand');
$document.scroll(function() {
	if ($document.scrollTop() >= 200) {
		$brand.addClass('visible');
	} else {
		$brand.removeClass('visible');
	}
});
(function($) {
	new WOW().init();
		$('a').bind('click', function(event) {
				var $ele = $(this);
				$('html, body').stop().animate({
						scrollTop: ($($ele.attr('href')).offset().top - 60)
				}, 1450, 'easeInOutExpo');
				$('#brand').addClass('visible');
				event.preventDefault();
		});
		$('.navbar-collapse ul li a').click(function() {
				/* always close responsive nav after click */
				$('.navbar-toggle:visible').click();
		});
		$('#galleryModal').on('show.bs.modal', function (e) {
			 $('#galleryImage').attr("src",$(e.relatedTarget).data("src"));
		});
})(jQuery);
/* Reproduktor na spuštění zvuku */
var $soundToggler = $('#sound-toggler'), $sound = $('#sound');
	$soundToggler.click(function() {
	$sound.toggleClass('playing');
});
var sound = document.getElementById("sound"); 
function playAudio() { 
	if (sound.classList.contains('playing')) {
		sound.pause();
	} else {
		sound.play();
	} 
}