

function pldSetVideo(mp4, webm) {
  jQuery('#video-wrapper').empty();

  mp4source = jQuery('<source/>', {
    src: mp4,
    type: "video/mp4",
    id: "mp4-source"
  });
  webmsource = jQuery('<source/>', {
    stc: webm,
    type: "video/webm",
    id: "webm-source"
  });
  video=jQuery('<video/>', {
    controls: "controls",
    id: "video"
  });
  video.append(mp4source).append(webmsource);
  video.html('Your browser does not support video playback.')
  jQuery('#video-wrapper').append(video);
  jQuery('#video').append(mp4source).append(webmsource);
}


jQuery(document).ready(function () {


    jQuery('header .menu-icon').on('click', function () {
        jQuery(this).siblings('.main-nav').toggleClass('open');

    });

    jQuery('.mobile-nav-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 300,
        autoplay: false,
        arrows: true,
        variableWidth: false,
        pauseOnHover: false,
        draggable: true,
        centerMode: false
    });

    /* TODO :
    jQuery('.video-player').on('play', function (e) {
        if (!jQuery(this).parents().hasClass('video-overlay')) {
            jQuery(this).parents('.overlay').toggleClass('video-overlay');
            jQuery(this).parents('.video-container').toggleClass('video-container-on');
            jQuery(this).siblings('.mdi-file-excel-box').toggleClass('mdi-show')
        }
    });

    jQuery('.video-player').on('click', function (e) {
        if (!jQuery(this).parents().hasClass('video-overlay')) {
            jQuery(this).parents('.overlay').toggleClass('video-overlay');
            jQuery(this).parents('.video-container').toggleClass('video-container-on');
            jQuery(this).siblings('.mdi-file-excel-box').toggleClass('mdi-show')
        }
    });

    jQuery('.mdi-file-excel-box').on('click', function (e) {
        jQuery(this).parents('.overlay').removeClass('video-overlay');
        jQuery(this).parents('.video-container').removeClass('video-container-on');
        jQuery(this).removeClass('mdi-show')
        document.getElementById('video').pause();

    });

	function changeSlide ()
	{
		var $slideshow = $('.slideshow');

		var $secondLastSlide = $slideshow.find('a').eq(-2);
		var $lastSlide = $slideshow.find('a').last();

		$secondLastSlide.show();

		$lastSlide.fadeOut(1000, function() {
			$lastSlide.prependTo($slideshow);
		});
	}

	setInterval(changeSlide, 7000);

	function changeInteriorSlide ()
	{
		var $slideshow = $('.interior-slideshow');

		var $secondLastSlide = $slideshow.find('img').eq(-2);
		var $lastSlide = $slideshow.find('img').last();

		$secondLastSlide.show();

		$lastSlide.fadeOut(1000, function() {
			$lastSlide.prependTo($slideshow);
		});
	}

	setInterval(changeInteriorSlide, 7000);

	jQuery('#select-product').change(function () {
		window.location = '/product-quote/' + $(this).val();
	});
  */
});
