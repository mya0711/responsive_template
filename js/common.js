/* *******************************************************
 * filename : common.js
 * description : 전체적으로 사용되는 JS
 * date : 2018-03-02
******************************************************** */


jQuery(function($){
	
	// 임의의 영역을 만들어 스크롤바 크기 측정
	function getScrollBarWidth(){
		if($(document).height() > $(window).height()){
			$('body').append('<div id="fakescrollbar" style="width:50px;height:50px;overflow:hidden;position:absolute;top:-200px;left:-200px;"></div>');
			fakeScrollBar = $('#fakescrollbar');
			fakeScrollBar.append('<div style="height:100px;">&nbsp;</div>');
			var w1 = fakeScrollBar.find('div').innerWidth();
			fakeScrollBar.css('overflow-y', 'scroll');
			var w2 = $('#fakescrollbar').find('div').html('html is required to init new width.').innerWidth();
			fakeScrollBar.remove();
			return (w1-w2);
		}
		return 0;
	}

	/* *********************** 헤더 FIXED ************************ */
	$(window).scroll(function  () {
		var scrollHeight = $(window).scrollTop();
		var startTop = $("#header").height();
		if ( scrollHeight > startTop ) {
			$("#header").addClass("fixed");
		}else {
			$("#header").removeClass("fixed");
		}
	});

	/* *********************** 상단 언어 목록 ************************ */
	$(".header-lang").click(function  () {
		$(this).toggleClass("open");
	}).mouseleave(function  () {
		$(this).removeClass("open");
	});

	/* *********************** 상단 검색 toggle ************************ */
	$(".header-search-box").each(function  () {
		var $searchBox = $(this);
		var $openBtn = $(this).find(".header-search-open-btn");
		var $closeBtn = $(this).find(".header-search-close-btn");
		
		$openBtn.click(function  () {
			$searchBox.addClass("open");
		});
		$closeBtn.click(function  () {
			$searchBox.removeClass("open");
		});
	});

	/* *********************** top버튼 ************************ */
	$(".to-top-btn").each(function  () {
		// top버튼 나오게 (필요한 경우에만 넣으세요)
		if ( $(this).length > 0 ) {
			$(window).scroll(function  () {
				if ( $(window).scrollTop() > 0 ) {
					$(".to-top-btn").addClass("fixed");
				}else {
					$(".to-top-btn").removeClass("fixed");
				}
			});
		}
		// top버튼 클릭
		$(this).on("click",function  () {
			$("html, body").animate({scrollTop:0},600,"easeInOutExpo");	// easing 효과 사용하기위해서는 jquery.easing.1.3.js이 필요함, 없을 시 기본 "swing"
			return false;
		});
	});
	
	/* *********************** 하단 파트너사 리스트 ************************ */
	$('.footer-partner-list').slick({
		slidesToShow: 7,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		dots:false,
		autoplay: true,
		speed:500,
		infinite:true,
		autoplaySpeed: 3000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-min"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-min"></i></button>',
		responsive: [
					{
					  breakpoint: 1367,
					  settings: {
						slidesToShow: 5
					  }
					},
					{
					  breakpoint: 1025,
					  settings: {
						slidesToShow: 3
					  }
					}
				  ]
	});

	/* *********************** 패밀리사이트 ************************ */
	$(".family-site-box").each(function  () {
		var $familyBox = $(this);
		var $familyListOpenBtn = $(this).children(".family-site-open-btn");
		var $familyList = $(this).children(".family-site-list");
		$familyListOpenBtn.click(function  () {
			$familyList.slideToggle(500);
			$familyBox.toggleClass("open");
			return false;
		});
		$(this).mouseleave(function  () {
			$familyList.slideUp(500);
			$familyBox.removeClass("open");
		});
	});

	/* *********************** 탭 공통 ************************ */
	$(".cm-tab-container").each(function  () {
		var $cmTabList = $(this).children(".cm-tab-list");
		var $cmTabListli = $cmTabList.find("li");
		var $cmConWrapper = $(this).children(".cm-tab-content-wrapper");
		var $cmContent = $cmConWrapper.children(".cm-tab-con");
		
		
		// 탭 영역 숨기고 selected 클래스가 있는 영역만 보이게
		var $selectCon = $cmTabList.find("li.selected").find("a").attr("href");
		$cmContent.hide();
		$($selectCon).show();

		$cmTabListli.children("a").click(function  () {
			if ( !$(this).parent().hasClass("selected")) {
				var visibleCon = $(this).attr("href");
				$cmTabListli.removeClass("selected");
				$(this).parent("li").addClass("selected");
				$cmContent.hide();
				$(visibleCon).fadeIn();
			}
			return false;
		});
	});

	/* *********************** 스크롤 터치시 커버 사라지게 ************************ */
	$(".custom-scrollbar-wrapper").on("touchmove click",function  () {
		$(this).find(".custom-scrollbar-cover").fadeOut(200);
	});

	
	/* *********************** 에디터 관련 ************************ */
	/* 테이블 스크롤넣기 */ 
	$(".editor table").each(function  () {
		$(this).wrap("<div class='editor-table-box'></div>");
	});
	
	/* ifrmae 태그 감싸기 */ 
	$(".editor iframe").each(function  () {
		var iframeSrc = $(this).attr("src");
		var findStr = "https://www.youtube.com/embed"; 

		if (iframeSrc.indexOf(findStr) != -1) {
		  $(this).wrap("<div class='editor-iframe-box'></div>");
		}
	});
});