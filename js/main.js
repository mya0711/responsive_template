/* *******************************************************
 * filename : main.js
 * description : 메인에만 사용되는 JS
 * date : 2021-06-15
******************************************************** */

$(document).ready(function  () {
	/* ************************
	* Func : fullpage 레이아웃 사용시
	* fullpage.js , detectBrowser() 필요
	************************ */
	if ($.exists('#fullpage')) {
		var $fullPage = $("#fullpage");
		var $fullPageSection = $fullPage.children(".section");
		$fullPage.fullpage({
			css3: true,
			fitToSection: false,
			navigation: true,
			scrollBar:false,
			scrollingSpeed:800,
			navigationPosition: 'right',
			navigationTooltips: ['Content01', 'Content02', 'Content03', 'Content04'],
			responsiveWidth: tabletWidth,
			responsiveHeight : 750,
			onLeave : function(origin, destination, direction){
				setTimeout(function  () {
					$(".section").eq(destination-1).find("[data-scroll]").addClass("animated");
				},500);
				// 사이드바 색상변경
				if ( destination > 1) {
					$("#fp-nav").addClass("black");
				}else {
					$("#fp-nav").removeClass("black");
				}
			}
		});
	}

	/* ************************
	* Func : 메인 비주얼 높이 설정 및 slick 슬라이드
	* slick.js , getWindowWidth(), getWindowHeight() 필요
	************************ */
	// 메인 비주얼 높이값 설정
	if ($.exists('#mainVisual.full-height')) {
		mainVisualHeight();
		$(window).on('resize', mainVisualHeight);

		function mainVisualHeight () {
			var visual_height = getWindowHeight()	- $("#header").height();	// header가 fixed or absolute일경우 - $("#header").height() 삭제
			if ( getWindowWidth() > 800 ) {
				$("#mainVisual").height(visual_height);
			}else {
				$("#mainVisual").css("height","auto");
			}
		}
	}

	// 메인 비주얼 슬라이드
	var $mainVisualItem = $(".main-visual-con");
	var visualPausePlay = true;		// Pause, play 사용시 변경

	$mainVisualItem.on('init', function(event, slick, currentSlide) {
		$(".main-visual-item").eq(0).addClass("active-item");
		if ($.exists('.main-visual-conuter')) {
			$(".main-visual-conuter .total-num").text(slick.slideCount);
		}
	});
	$mainVisualItem.on('beforeChange', function(event, slick, currentSlide, nextSlide) {	
		$(".main-visual-item").removeClass("active-item");
		$(this).find(".main-visual-item").eq(nextSlide).addClass("active-item");
		if ($.exists('.main-visual-conuter')) {
			$(".main-visual-conuter .cur-num").text(nextSlide+1);
		}
	});

	// 메인 비주얼 슬라이드
	$mainVisualItem.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		dots:true,
		autoplay: true,
		speed:2000,
		infinite:true,
		autoplaySpeed: 4000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		zIndex:1,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-thin"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-thin"></i></button>'
	});

	$mainVisualItem.find(".slick-dots").wrap("<aside class='slick-dots-wrapper'><div class='area-box'></div></aside>");

	// 일시정지, 재생버튼 사용시
	if ( visualPausePlay ) {
		$(".slick-dots-wrapper").children().append("<span class='slick-control-btns'><button class='slick-pause-btn' title='일시정지'><i class='xi-pause'></i></button><button class='slick-play-btn' title='재생'><i class='xi-play-circle-o'></i></button></span>");

		$(document).on("click",".slick-pause-btn",function  () {
			$mainVisualItem.slick("slickPause");
			$(this).hide();
			$(".slick-play-btn").show();
		});
		$(document).on("click",".slick-play-btn",function  () {
			$mainVisualItem.slick("slickPlay");
			$(this).hide();
			$(".slick-pause-btn").show();
		});
	}

	/* ************************
	* Func : 메인 갤러리 슬라이드
	* slick.js 필요
	************************ */
	$('.main-gallery-rolling-con > ul').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		dots:false,
		autoplay: false,
		speed:800,
		infinite:true,
		autoplaySpeed: 3000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="material-icons">&#xE314;</i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="material-icons">&#xE315;</i></button>',
		responsive: [
					{
					  breakpoint: 801,
					  settings: {
						slidesToShow: 3,
						slidesToScroll: 1
					  }
					},
					{
					  breakpoint: 641,
					  settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					  }
					}
				  ]
	});
	
	/* ************************
	* Func : 메인 갤러리 + 설명 슬라이드
	* slick.js 필요
	************************ */
	$('.main-slide-photo-con').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		dots:false,
		autoplay: false,
		speed:800,
		infinite:true,
		autoplaySpeed: 3000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="material-icons">&#xE314;</i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="material-icons">&#xE315;</i></button>',
		asNavFor: '.main-slide-text-con'
	});
	$('.main-slide-text-con').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		dots:false,
		autoplay: false,
		speed:800,
		infinite:true,
		autoplaySpeed: 3000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		asNavFor: '.main-slide-photo-con'
	});	
	
	
	/* ************************
	* Func : 해당영역갔을때 슬라이드 autoPlay
	* wayPoint.js 필요
	************************ */
	// 해당영역갔을때 슬라이드 autoPlay
	if ($.exists('.start-autoplay-scroll-object')) {
		$(".start-autoplay-scroll-object").slick("slickPause");
		$(".start-autoplay-scroll-object").waypoint(function  () {
			$(this).slick("slickPlay");
		}, { 
			offset: startOffset
		});
	}

	/* ************************
	* Func : 사이드바 FIXED
	* objectFixed() 필요
	************************ */
	if ($.exists('#rightBar')) {
		$(window).scroll(function  () {
			var rightStartTop = $(window).height() / 2;
			objectFixed($("#rightBar"), rightStartTop);
		});
	}
});
