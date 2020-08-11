/* *******************************************************
 * filename : common.js
 * description : 전체적으로 사용되는 JS
 * date : 2020-08-10
******************************************************** */


/* ************************
  * 브라우저를 체크할때 사용하는 함수
  * return browser(브라우저name)
  ************************ */
function detectBrowser () {
	var agent = navigator.userAgent.toLowerCase(); 
	var browser; 
	
	if ( (agent.indexOf('msie') > -1) || (agent.indexOf('trident') > -1) || (agent.indexOf('edge') > -1) ) { 
		browser = 'ie'
	}else if(agent.indexOf('firefox') > -1) { 
		browser = 'firefox' 
	}else if(agent.indexOf('opr') > -1) { 
		browser = 'opera' 
	}else if(agent.indexOf('chrome') > -1) { 
		browser = 'chrome' 
	}else if(agent.indexOf('safari') > -1) { 
		browser = 'safari'
	}

	return browser;
}

 /* ************************
  * IE 버전을 체크할때 사용하는 함수
  * return : IE 아닐때 false / IE 일때 9,10,11,"edge"
  ************************ */
function ieVersionCheck () {
	var word; 
	var version = "N/A"; 
	var agent = navigator.userAgent.toLowerCase(); 
	var name = navigator.appName; 

	// IE old version ( IE 10 or Lower ) 
	if ( name == "Microsoft Internet Explorer" ) word = "msie "; 
	else { 
		// IE 11 
		if ( agent.search("trident") > -1 ) word = "trident/.*rv:"; 
		// Microsoft Edge  
		else if ( agent.search("edge/") > -1 ) word = "edge/"; 
	} 
	var reg = new RegExp( word + "([0-9]{1,})(\\.{0,}[0-9]{0,1})" ); 
	if (  reg.exec( agent ) != null  ) version = RegExp.$1 + RegExp.$2; 
	
	if ( version !="NaN" && version < 12 ) {
		return parseInt (version)
	}else if ( word === "edge/" ) {
		return	 "edge";
	}else {
		return false;
	}
}

 /* ************************
  * OS 체크 함수
  * android/ios 체크할때 사용
  ************************ */
function detectOS(){
    var agent = navigator.userAgent.toLowerCase(); 
	var osCheck; 

    if ( agent.indexOf('android') > -1) {
        return "android";
    } else if ( agent.indexOf("iphone") > -1|| agent.indexOf("ipad") > -1|| agent.indexOf("ipod") > -1 || agent.indexOf("macintosh") > -1 ) {
        return "ios";
    } else {
        return "other";
    }

	return osCheck;
}

 /* ************************
  * 모바일 체크 함수
  * return : 모바일 true / PC false
  * Ipad Safari userAgent 변경으로 인해 if문 추가 (2020-07-17)
  ************************ */
function isMobile(){
	var UserAgent = navigator.userAgent;
	if (UserAgent.match(/iPhone|iPad|iPad|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null)
	{
		return true;
	}else{
		// Ipad Safari Browser
		if ( detectIpad() ) {
			return true;
		}else {
			return false;
		} 
	}
}
function detectIpad() {
	var userAgent = navigator.userAgent || navigator.vendor || window.opera;
	// Lying iOS13 iPad
	if (userAgent.match(/Macintosh/i) !== null) {
		// need to distinguish between Macbook and iPad
		var canvas = document.createElement("canvas");
		if (canvas !== null) {
			var context = canvas.getContext("webgl") || canvas.getContext("experimental-webgl");
			if (context) {
				var info = context.getExtension("WEBGL_debug_renderer_info");
				if (info) {
					var renderer = context.getParameter(info.UNMASKED_RENDERER_WEBGL);
					if (renderer.indexOf("Apple") !== -1)
					return true;
				}
			}
		}
	}
	return false;
}

/* ************************
  * window 팝업 오픈 함수
  * @param src : "팝업 페이지 주소"
  * @param title : "팝업 페이지 타이틀"
  * @param option : "width=너비, height=높이, left=x축 위치, top=y축 위치, resizable=리사이즈 여부, scrollbars=스크롤바 여부, status=상태 표시줄 여부"
  ************************ */
function winPopupOpen(src,title,option){
	window.open(src,title,option);
}

 /* ************************
  * 브라우저의 가로값, 세로값 측정 함수
  * return 가로값/세로값
  ************************ */
/* 임의의 영역을 만들어 스크롤바 크기 측정 */ 
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
/* 브라우저 가로, 세로크기 측정 */ 
function getWindowWidth () {
	return $(window).outerWidth() + getScrollBarWidth() ;
}
function getWindowHeight () {
	return $(window).height() ;
}

 /* ************************
  * 브라우저의 스크롤바의 수직 위치 측정 함수
  * return 스크롤바 위치 값
  ************************ */
function getScrollTop () {
	return $(window).scrollTop();
}

 /* ************************
  * 브라우저의 스크롤을 이동시키는 함수
  * @param top : 이동지점
  * @param speed : 이동속도
  ************************ */
function moveScrollTop (top, speed) {
	$("html, body").animate({scrollTop:top}, speed ,"easeInOutExpo");
}

 /* ************************
  * object toggleClass 함수
  * @param object : 적용되야할 선택자
  * @param className : toggleClass Name
  ************************ */
/* addClass Active */
function addClassName (object, className) {
	$(object).addClass(className);
}
function removeClassName (object, className) {
	$(object).removeClass(className);
}

/* ************************
  * 갯수체크 함수
  * @param selector : 선택자
  * 1개이상 있으면 return true
  ************************ */
$.exists = function(selector) {
	return ($(selector).length > 0);
}

/* ************************
  * AOS Plugin 
  * aos.js 필요
  * ieVersionCheck() 함수 필요 - IE 10부터 적용
  ************************ */
/* AOS Plugin */
function aosInit () {
	var browserVer = ieVersionCheck();
	if ( !browserVer || browserVer > 9 ) {
		AOS.init({
		 // Global settings:
		  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
		  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
		  initClassName: 'aos-init', // class applied after initialization
		  animatedClassName: 'aos-animate', // class applied on animation
		  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
		  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
		  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
		  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
		  

		  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
		  offset: 150, // offset (in px) from the original trigger point
		  delay: 0, // values from 0 to 3000, with step 50ms
		  duration: 1000, // values from 0 to 3000, with step 50ms
		  easing: 'ease', // default easing for AOS animations
		  once: true, // whether animation should happen only once - while scrolling down
		  mirror: false, // whether elements should animate out while scrolling past them
		  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
		});		
	}
}

/* ************************
  * magnificPopup Plugin ( 모달팝업갤러리 )
  * jquery.magnific-popup.js 필요
  ************************ */
function magnificPopup (popupGallery) {
	$(popupGallery).magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: true,
		fixedContentPos: true,
		mainClass: 'mfp-with-zoom',
		removalDelay: 500, //delay removal by X to allow out-animation
		  callbacks: {
			beforeOpen: function() {
			  // just a hack that adds mfp-anim class to markup 
			   this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
			   this.st.mainClass = this.st.el.attr('data-effect');
			}
		  },
		closeOnContentClick: true,
		midClick: true, // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
	});
}


/* ************************
  * mCustomScrollbar Plugin ( 스크롤바 커스텀 )
  * jquery.mCustomScrollbar.concat.min.js 필요
  * @param selector : 선택자
  ************************ */
/* Custom Scrollbar Plugin (x,y) */
function customScrollX (scrollObject) {
	$(scrollObject).mCustomScrollbar({
		axis:"x",
		theme:"dark"
	});
}
function customScrollY (scrollObject) {
	$(scrollObject).mCustomScrollbar({
		axis:"y",
		theme:"dark"
	});
}

/* ************************
  * PHP 주소 Parameter
  * @param strParamName : 가져올 파라미터값
  ************************ */
/* PHP Get Parameter  */
function getParameter(strParamName){
	var arrResult = null;
	if(strParamName){
		 arrResult = location.search.match(new RegExp("[&?]" + strParamName + "=(.*?)(&|$)"));
	}
	return arrResult && arrResult[1] ? arrResult[1] : null;
}
function toAnchorParameter (anchor) {
	if ( getParameter(anchor) ) {
		var anchorConTop = $("#"+getParameter(anchor)+"").offset().top;
		var headerHeight = $("#header").height();
		moveScrollTop(anchorConTop-headerHeight, 500);
	}
}

/* ************************
  * 순차적으로 active클래스가 붙는 함수
  * @param activeList : 선택자
  ************************ */
/* Active cycle */ 
function rollingActive (activeList) {
	$(activeList).each(function  (index) {
		$itemList = $(this);
		$item = $itemList.find("li");
		itemLength = $item.length;
		startNum = 0;
		rollingSpeed = $itemList.data("rolling-time");
		
		function visualTime(){
			if(startNum < ( itemLength - 1)){
				startNum++;
			}else{
				startNum = 0;
			}
			visualPlay();
		}
		function visualPlay(){
			$item.each(function(id){
				if(id == startNum){
					$(this).addClass("active"); // li에 클래스 붙이기
				}else{
					$(this).removeClass("active");
				}
			});
		};
		visualPlay();
		visual_timer = setInterval(visualTime,rollingSpeed);
	});
}

/* ************************
  * 스크롤값에 따라 클래스가 붙는 함수
  * @param object : 선택자
  * @param fixedStartTop : 클래스가 붙는 시작되는지점
  * @param className : 붙여야하는 클래스이름
  * getScrollTop() 함수 필요
  ************************ */
/* Fixed Object */ 
function objectFixed ( object, fixedStartTop, className ) {
	if ( getScrollTop() >  fixedStartTop ) {
		if (!($(object).hasClass(className))) {	
			$(object).addClass(className);
		}
	}else {
		if ($(object).hasClass(className)) {
			$(object).removeClass(className);
		}
	}
}

jQuery(function($){
	/* *********************** 브라우저 체크 및 기기체크 ************************ */
	if ( isMobile() ) {
		$("body").addClass("is-mobile").addClass(detectOS()+"-os");
	}else {
		$("body").addClass("is-pc").addClass(detectBrowser()+"-browser");
	}

	/* *********************** 드롭메뉴 공통 ************************ */
	$(".cm-drop-menu-box").each(function  () {
		var $dropBox = $(this);
		var $dropOpenBtn = $(this).children(".cm-drop-open-btn");
		var $dropList = $(this).children(".cm-drop-list");
		var eventState = $dropBox.data("drop-event");
		
		if ( eventState === "click" ) {
			$dropOpenBtn.click(function  () {
				$dropList.slideToggle(500);
				$dropBox.toggleClass("open");
				$dropBox.on("mouseleave", function  () {
					dropClose ();
				});
				return false;
			});
			$("body").click(function  () {
				dropClose();
			});
		}else if ( eventState === "hover" ) {
			$dropBox.hover(function  () {
				$dropList.slideDown(500);
				$dropBox.addClass("open");
			},function  () {
				dropClose ();
			});
		}
		
		
		
		function dropClose () {
			if ( $dropBox.data("drop-width") ) {
				if ( getWindowWidth () < $dropBox.data("drop-width")+1 ) {
					$dropList.slideUp(500);
					$dropBox.removeClass("open");
				}
			}else {
				$dropList.slideUp(500);
				$dropBox.removeClass("open");
			}
			
		}
		$(window).resize(function  () {
			if ( getWindowWidth () > $dropBox.data("drop-width") ) {
				$dropList.show();
			}else {
				$dropList.hide();
			}
		});
	});

	/* *********************** 탭 공통 ************************ */
	$(".cm-tab-container").each(function  () {
		var $cmTabList = $(this).find(".cm-tab-list");
		var $cmTabListli = $cmTabList.find("li");
		var $cmConWrapper = $(this).children(".cm-tab-content-wrapper");
		var $cmContent = $cmConWrapper.children(".cm-tab-con");
		
		
		// 탭 영역 숨기고 selected 클래스가 있는 영역만 보이게
		var $selectCon = $cmTabList.find("li.selected").find("a").attr("href");
		var selectTxt = $cmTabList.find("li.selected").find("em").text();
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

		// 모바일 버튼이 있을때 추가
		var $cmTabMobileBtn = $(this).find(".cm-tab-m-btn");
		if ($.exists($cmTabMobileBtn)) {
			$cmTabMobileBtn.find("span").text(selectTxt);
			// Mobile Btn Click
			$cmTabMobileBtn.click(function  () {
				$(this).toggleClass("open").siblings().slideToggle();
				return false;
			});

			// Mobile List Click
			$cmTabListli.children("a").click(function  () {
				$cmTabMobileBtn.find("span").text($(this).find("em").text());
				tabListClose();
			});
			$("body").click(function  () {
				tabListClose();
			});
			function tabListClose () {
				if ( getWindowWidth () < 801 ) {
					$cmTabMobileBtn.removeClass("open").siblings().slideUp();
				}
			}
			$(window).resize(function  () {
				if ( getWindowWidth () > 800 ) {
					$cmTabMobileBtn.siblings().show()//.css("display","inline-block");
				}else {
					$cmTabMobileBtn.siblings().hide()//.css("display","none");
				}
			});
		}
	});

	/* *********************** 상단 :: 헤더 FIXED ************************ */
	if ($.exists('#header')) {
		$(window).scroll(function  () {
			var startTop = $("#header").height();
			objectFixed($("#header"), startTop, "fixed");
		});
	}

	/* *********************** 상단 :: 검색 toggle ************************ */
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

	/* *********************** 상단 :: 사이트맵 스타일 02************************ */
	if ($.exists('.sitemap-open-btn')) {
		var sitemapState = false;
		var $sitemapOpenbtn = $(".sitemap-open-btn");
		
		//  Toggle
		$(".sitemap-open-btn").click(function  () {
			if ( ! sitemapState ) {
				sitemap_open();
			}else {
				sitemap_close();
			}
			if ( $(this).data("event") === "toggle") {
				sitemapState = !sitemapState;
			}
		});
		// Close Button
		$(".sitemap-close-btn").click(function  () {
			sitemapState = !sitemapState;
			sitemap_close();
		});

		function sitemap_open () {
			$("#sitemapContent").addClass("open");
			if ( $(this).data("event") === "toggle") {
				$(".sitemap-open-btn").addClass("active");
			}
			$("body").css({'height':$(window).height(), 'overflow':'hidden'});
			if ($.exists('#fullpage')) {
				$.fn.fullpage.setAllowScrolling(false);
				$.fn.fullpage.setKeyboardScrolling(false);
			}
		}
		function sitemap_close () {
			$("#sitemapContent").removeClass("open");
			$(".sitemap-open-btn").removeClass("active");
			$("body").css({'height':'auto', 'overflow':'auto'});
			if ($.exists('#fullpage')) {
				$.fn.fullpage.setAllowScrolling(true);
				$.fn.fullpage.setKeyboardScrolling(true);
			}
		}
	}

	/* *********************** 하단 :: top버튼 ************************ */
	$(".to-top-btn").each(function  () {
		// top버튼 나오게 (필요한 경우에만 넣으세요)
		if ( $(this).length > 0 ) {
			$(window).scroll(function  () {
				objectFixed($(".to-top-btn"), 0, "fixed");
			});
		}
		// top버튼 클릭
		$(this).on("click",function  () {
			if ($.exists('#fullpage')) {
				$.fn.fullpage.moveTo(1);
			}else {
				moveScrollTop(0, 300);
			}
            
			return false;
		});
	});
	
	/* *********************** 하단 ::  파트너사 리스트 ************************ */
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
});

$(window).load(function  () {
	/* *********************** 한페이지 내에서의 주소 이동 ************************ */
	toAnchorParameter("anchor");	/* 주소~?anchor=content */ 
	/* *********************** AOS Plugin ************************ */
	aosInit ();
});