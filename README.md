# responsive_template
Responsive Website Template

* Giantsoft Publisher Team
* Writer : Jang Mi Hwa
* UpDate :  2021-07-06
  

## 업데이트 내역

- #### 2021-07-06

  #### * css 파일
	<code> <b>1. css/layout_responsive.css</b></code>
	* 모바일 네비게이션 마크업 수정으로 인한 css 수정

	<code> <b>2. css/common/cm_bbs_common.css</b></code>
	* Custom Select 추가

  #### * php 파일
	<code> <b>1. /kr/company/sample.php</b></code>
	* Custom Select 추가

  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* Custom Select 추가

***************************


- #### 2021-06-29

  #### * css 파일
	<code> <b>1. css/layout.css, css/layout_responsive.css</b></code>
	* .foot-menu{float:left; } 삭제
	* 푸터 사이트맵 스타일 추가
	* #fullpage #header -> .fullpage-html #header 로 수정

  #### * php 파일
	<code> <b>1. /kr/index.php</b></code>
	* Slick 슬라이드 해당영역갔을때 play 되는 예시 추가(.start-autoplay-scroll-object)

	<code> <b>2. /kr/include/footer.php</b></code>
	* div 정리 및 사이트맵 추가

  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* 웹접근성 키보드이용시 조건문 수정(익스에서 작동안되도록)
	* 푸터 사이트맵 복사 함수 추가 ( cloneFooterSitemap() )
	
	<code> <b>2. /js/main.js</b></code>
	* 해당영역 갔을때 slick 슬라이드 play => .start-autoplay-scroll-object

	<code> <b>3. /js/layer_popup.js</b></code>
	* fullpage responsive모드일때 모달팝업띄우면 스크롤바 2개생기는 이슈로 조건문 수정 

***************************

- #### 2021-06-23

  #### * css 파일
	<code> <b>1. css/ie9.css</b></code>
	* Split.js 하위브라우저 작동 안하는 이슈로 수정

	<code> <b>2. css/layout.css</b></code>
	* fullpage 일때 html{overflow:hidden; height:100%;} / #wrap{position:static; } 설정
	=> 로딩될때 스크롤바 보였다가 없어져서 살짝 흔들리는 이슈로 html overflow:hidden;
	=> 익스플로러에서 버벅이는이슈 및 하위브라우저 이슈로 수정
	
	<code> <b>3. css/layout_responsive.css</b></code>
	* 공통레이아웃 area영역 조정 (max-width:1260px)
	=> 가로값 + 양옆 padding 값까지 더한 크기부터 미디어쿼리작성

  #### * php 파일
	<code> <b>1. /kr/index_fullpage.php</b></code>
	* fullpage PHP 변수추가
	* #wrap 태그에 클래스 삭제(fullpage.js에서 클래스 자동생성)

	<code> <b>2. /kr/include/dtd.php</b></code>
	* fullpage PHP 변수추가에 따른 조건문 추가 => fullpage일경우 <html class="fullpage-html"> 클래스 생성
	
	<code> <b>3. /kr/company/sample.php</b></code>
	* Scale축소할때 자동높이값 라이브러리 추가 : spidochescaler
	* 이미지맵 반응형 라이브러리 추가

  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* Splitting() 하위브라우저 작동되지않도록수정
	* top버튼 이벤트 수정
	
	<code> <b>2. /js/functions.js</b></code>
	* Mac Os - Big Sur, Safari 버전 모바일로 체크되는이슈 수정

***************************


- #### 2021-06-15

  #### * css 파일
	<code> <b>1. css/default.css</b></code>
	* 익스 하위브라우저 팝업창 기존 팝업대신 레이어팝업으로 대체

	<code> <b>2. css/ie9.css</b></code>
	* AOS 삭제로 해당소스 삭제
	* 메인텍스트, 서브메뉴 display:flex 로 변경 후 틀어지는부분 수정 
	
	<code> <b>3. css/layout.css</b></code>
	* fullpage 일때 #wrap, .to-top-btn 수정
	* header search input width 100% 변경
	* GNB 전체메뉴, 각각메뉴 부분적으로 수정
	* 서브레이아웃 topMenu03 틀어지는부분 수정
		
	<code> <b>4. css/layout_responsive.css</b></code>
	* gnb mobile 레이아웃 수정
	
	<code> <b>5. css/main.css</b></code>
	* 비주얼 높이값 100vh추가
	* #fullpage .section:not(#mainFooter){min-height:750px;} 푸터영역은 min-height 젹용 안되도록 수정
	* AOS 삭제 후 대체소스변경
	
	<code> <b>6. css/animate.css</b></code>
	* AOS 대체소스 애니메이션 css 추가

	<code> <b>7. css/plugin/aos.css</b></code>
	* AOS 삭제

  #### * php 파일
	<code> <b>1. /kr/index.php, /kr/index_fullpage.php</b></code>
	* AOS 삭제 후 대체소스 변경
	* 하위브라우저 조건부주석 수정

	<code> <b>2. /kr/include/bottom.php</b></code>
	* mCustomScroll, magnific-popup js 서브에서 로딩되도록 이동
	
	<code> <b>3. /kr/include/dtd.php</b></code>
	* animate.css 추가
	* aos.css 삭제
	* 조건부주석 추가 => ie9.css 추가(중간에 변경하면서 사라진듯..)

	<code> <b>4. /kr/include/header.php</b></code>
	* 모바일 네비게이션 gnb랑 공통으로 쓸수있도록 수정

	<code> <b>5. /kr/include/scripts.php</b></code>
	* aos.js 삭제
	* mCustomScroll, magnific-popup js 서브에서 로딩되도록 이동
	* waypoints.min.js 추가

  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* aosInit() 함수호출 삭제
	* 웹접근성을위해 키보드이용시 mouse클래스붙는부분 익스버벅이는 이슈로 익스제외 함수호출
	* waypoint 추가
	
	<code> <b>2. /js/functions.js</b></code>
	* aosInit() 함수 삭제
	
	<code> <b>3. /js/main.js</b></code>
	* fullpage onLeave 이벤트 수정
	* fullpage scrollingSpeed 통일
	* 전체 주석스타일 변경

	<code> <b>4. /js/nav.js</b></code>
	* 전체적으로 정리 및 함수화

	<code> <b>5. /js/plugin/aos.js</b></code>
	* 삭제

	<code> <b>6. /js/plugin/waypoints.min.js</b></code>
	* 추가

  #### * image 파일
	<code> <b>1. 메인비주얼 이미지 4장</b></code>
	* 퀄리티 60%로 수정

***************************

- #### 2021-05-25

  #### * css 파일
	<code> <b>1. css/layout.css</b></code>
	* #header, #headerInner 의 transition 삭제(익스플로러 페이지바뀔때마다 헤더 움직이는 현상으로 삭제)
	* 헤더 검색박스 css 수정
	* #gnb.each-menu > ul > li .gnb-2dep 스타일 수정
	* 탑메뉴 display:table => display:flex로 변경

	<code> <b>2. css/layout_responsive.css</b></code>
	* 헤더 검색박스 css 수정
	
	<code> <b>3. css/main.css</b></code>
	* 메인비주얼 텍스트영역 transform:translateY(-50%) 삭제 후 flex로 변경
	* active-section클래스 붙을때 splitting 효과 추가
	* 컨텐츠5 : background-attachment:fixed 익스플로러 버벅이는 오류로 익스제외 브라우저에서만 사용하도록 변경
		
	<code> <b>2. css/common/cm_bbs_common.css</b></code>
	* 검색 serach box : select 없을때 제대로 나올 수 있도록 수정



  #### * php 파일
	<code> <b>1. /kr/index.php</b></code>
	* 메인텍스트박스 flex변경을 위한 영역추가

	<code> <b>2. /kr/index_fullpage.php</b></code>
	* 메인텍스트박스 flex변경을 위한 영역추가
	* data-aos 삭제
	
	<code> <b>3. /kr/include/header.php</b></code>
	* 검색영역 변경

	<code> <b>4. /kr/include/top.php</b></code>
	* 탑메뉴 주석수정
	* 상단타이틀영역 area 추가

  #### * js 파일
	<code> <b>1. /js/main.js</b></code>
	* fullpage 속도 익스일때 500 -> 600으로 변경
	* fullpage OnLeave 수정 ( 풀페이지안에서 aos사용하면 버벅이는 이슈로 인하여 삭제 )
	

***************************

- #### 2021-04-21

  #### * css 파일
	<code> <b>1. css/layout.css</b></code>
	* footer 패밀리사이트 오픈 아이콘 반대로된부분 변경
	* 서브 loaction 메뉴 화살표를 네이버아이콘으로 변경
	
	<code> <b>2. css/common/스킨게시판.css</b></code>
	* makehome 게시판 추가로 업데이트 및 추가



  #### * php 파일
	<code> <b>1. /kr/include/footer.php</b></code>
	* top버튼을 a태그에서 button태그로 변경


***************************

- #### 2021-03-29(2차)

  #### * css 파일
	<code> <b>1. css/default.css</b></code>
	* input 기본스타일 초기화 type추가(search,email타입)
	
	<code> <b>2. css/common/cm_bbs_common.css</b></code>
	* paging 네이버아이콘변경 및 first,last css 추가

  #### * js 파일
	<code> <b>1. js/common.js</b></code>
	*checkOsBrowser() 수정


***************************

- #### 2021-03-29

  #### * php 파일
	<code> <b>1. kr/index.php</b></code>
	* 메인 공통 타이틀 data-aos 위치변경
	
	<code> <b>2. kr/index_fullpage.php</b></code>
	* fullpage.css 이동
	* 메인 비주얼 카운터 추가

	<code> <b>3. kr/company/sample.php</b></code>
	* ★ Fixed Tab 오류로 인한 클래스추가(top-fixed-object)
	
	<code> <b>3. kr/incllude/dtd.php</b></code>
	* meta 태그 theme-color  추가
	* 많이 사용하는 스킨 css만 선언 / 그외는 추가될때 선언해주세요.

	<code> <b>4. kr/incllude/header.php</b></code>
	* ★ .top-fixed가 붙는 object에 top-fixed-object 클래스 추가
	* 외국어 나열방식 추가
	
	<code> <b>5. kr/incllude/top.php</b></code>
	* ★ .top-fixed가 붙는 object에 top-fixed-object 클래스 추가

	<code> <b>6. kr/lib/config.php, kr/lib/sub.php</b></code>
	* php버전변경으로 인한 수정 ( $tools => $db )


  #### * css 파일
	<code> <b>1. css/default.css</b></code>
	* 웹접근성을 위해 focus:outline:none 관련된부분 수정
	* 스킵네비게이션 스타일 수정(가독성을 높이기위해)
	* ★ split 감싸주는 word태그에 line-height 변경 => g,y 들어갈경우 그부분에 line-height 조정필요

	<code> <b>2. css/layout.css</b></code>
	* ::selectoion 추가
	* table, th, td{word-break:break-word} 추가
	* #header .logo : padding-bottom 삭제
	* 외국어선택 나열방식 추가
	* #gnb > ul > li > a : height 삭제
	* li:hover 이벤트됬을때 2차메뉴배경 깔리는부분 삭제 => #gnb.each-menu > ul > li .gnb-2dep.open:before{height:calc(100% + 20px); opacity:1.0;filter:Alpha(opacity=100);}

	<code> <b>3. css/main.css</b></code>
	* Fullpage일때 레이아웃 선언부분 추가
	* 메인 공통 타이틀 data-aos 위치변경으로 인한 수정

	<code> <b>4. css/common/cm_bbs_common.css</b></code>
	* 3/29일자 수정파일업로드
	* 공통컬러 추가
	* paging 관련 클래스 추가(margin없는형태:no-margin / 원형형태 : paging-style02 / 라인형태 : paging-style03
	* 관리자코멘트부분 css수정

	<code> <b>5. css/common/cm_board.css</b></code>
	* 공통색상추가
	* 기본리스트 최적화작업 및 아이콘수정
	* 기본게시판 스킨2~4 최적화수정작업

	<code> <b>6. css/common/cm_gallery.css</b></code>
	* 3/26일자 수정파일업로드
	* 갤러리스킨1 : category 색상변경 및 아이콘변경 
	
	<code> <b>7. css/common/cm_member.css</b></code>
	* 2/21일자 수정파일업로드
	* 로그인폼 가로값 수정

	<code> <b>8. css/common/cm_shopping.css</b></code>
	* 2/21일자 수정파일업로드
	* 후기 스킨1, 4번 폼 수정

	<code> <b>9. css/common/cm_store.css</b></code>
	* 2/21일자 수정파일업로드
	* 매장관리(지도형) 5번 스킨폼 수정


  #### * js 파일
	<code> <b>1. js/common.js</b></code>
	* 브라우저 체크 및 기기체크 checkOsBrowser() 함수로 변경하여 리사이즈시 적용될수있도록 수정
	* 스킵네비게이션 html[lang=ko] 가 아닐경우 영문으로 들어가게 수정
	* 키보드,터치이용시/ 마우스이용시 구분(웹접근성)
	* 탑버튼 클릭시 포커스가 상단으로 이동할수있도록 수정(웹접근성)
	
	<code> <b>2. js/layer_popup.js</b></code>
	* 모달 오픈시 팝업닫기버튼으로 포커스 이동할수있도록 추가(웹접근성)
	* ESC클릭시 모달팝업 닫힐 수 있도록 추가(웹접근성)

	<code> <b>3. js/main.js</b></code>
	* aos-animate클래스 붙는방법 수정(좌우 네비게이션으로 풀페이지 이동시 클래스가 안붙는 오류)

	<code> <b>4. js/sub.js</b></code>
	* Fixed Tab js 수정 => 스크롤이 0이거나 탭이 fixed되지 않을때 높이값 체크가 안되는 오류


***************************

- #### 2020-12-18

  #### * php 파일
	<code> <b>1. kr/ect/sitemap.php</b></code>
	* 변수명 변경 ( $gnbList => $sitemapGnbList )

***************************

- #### 2020-11-25

  #### * php 파일
	<code> <b>1. kr/company/sample.php</b></code>
	* wide컨텐츠 : $content_type="wide"; 
	* 샘플추가

	<code> <b>2. kr/company/bbs_basic.php → kr/company/sample_bbs.php</b></code>
	* $lang = 1;	// 언어선택 삭제

	<code> <b>3. kr/company/sample_online.php</b></code>
	* 온라인문의 샘플로 넣어놓았습니다.

	<code> <b>4. kr/etc/sitemap.php</b></code>
	* 제이쿼리 수정

	<code> <b>5. kr/etc/sitemap_02.php</b></code>
	* 사이트맵 02 오류수정
	
	<code> <b>6. kr/include/bottom.php</b></code>
	* <? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/scripts.php"; ?> 추가

	<code> <b>7. kr/include/dtd.php</b></code>
	* 스크립트 하단으로 이동, css정리

	<code> <b>8. kr/include/footer.php</b></code>
	* 패밀리사이트 수정, 드롭메뉴클래스 수정, 모달레이어 팝업 삭제
	
	<code> <b>9. kr/include/footer.php</b></code>
	* 언어선택 드롭메뉴 클래스 수정
	* 구글아이콘-> 네이버아이콘으로 변경
	
	<code> <b>10. kr/include/scripts.php</b></code>
	* scripts.php :  스크립트 모음 
	
	<code> <b>11. kr/include/top.php</b></code>
	* nav.js 에서 dep1 사용을위해 변경 
	* 구글아이콘-> 네이버아이콘으로 변경
	* wide 컨텐츠 사용을 위해 조건문 추가
	* 상단 타이틀 스타일 2가지로 축소

	
	<code> <b>12. kr/index.php, kr/index_fullpage.php</b></code>
	* 조건부주석 하단으로 이동
	* splitting 예시 추가

	<code> <b>12. kr/lib/config.php</b></code>
	* $lang="1";	// 국문 1, 영문 2, 중문 3, 일문 4 추가
	
  #### * css 파일
	<code> <b>1. css/layout.css </b></code>
	* 전체페이지 word-break:keep-all; 삽입
	* header, top-menu-fixed => 기존 fixed 클래스에서 top-fixed클래스로 변경
	* 푸터 레이아웃 색상변경 
	* top버튼 기존 fixed => bottom-fixed로 수정
	* Footer 주석 수정, familysite 수정
	* 비주얼영역 이전,다음 버튼 수정
	* 전체적으로 네이버아이콘으로 변경
	* content영역 wide일때 / wide 아닐때 나눔
	* 상단정보 표시 2가지스타일로 축소
	* 사이트맵 02 세로 가운데정렬로 수정


	<code> <b>2. css/layout_responsive.css </b></code>
	* 모바일 gnb 아이콘 네이버아이콘으로 변경(before로 사용)
	* 모바일 gnb 회원메뉴 display:flex로 변경

	<code> <b>3. css/main.css </b></code>
	* main visual 1텍스트 splitting 사용하여 변경
	* 화살표 크기지정 삭제 / 스크롤아이콘 제이쿼리에서 css애니메이션으로 변경

	<code> <b>4. css/default.css</b></code>
	* ios input[type="search"] 초기화 추가, ios input태그 border-radius 초기화
	* .font-xi:before{font-family:xeicon !important} 추가
	* split Text 기본 css 추가
	* br태그 관련 css 추가(m-br / pc-br)

	<code> <b>5. css/content.css, css/content_responsive.css</b></code>
	* 탭 스타일 클래스이름 수정
	* 드롭메뉴 스타일 클래스이름 수정

	<code> <b>6. css/common/cm_member.css</b></code>
	* 이메일,연락처 폼 수정 ( 간격최적화 ) 

	<code> <b>7. css/common/cm_bbs_common.css</b></code>
	* custom checkbox / radio checkbox 네이버아이콘 before로 수정
	* 글쓰기폼, 문의폼 수정( 간격최적화 ) 

	<code> <b>8. kr/css/language.css</b></code>
	* html[lang="ko"]{} 사용
	* 주석넣어놓음
	


  #### * js 파일
	<code> <b>1. js/common.js </b></code>
	* 전체적으로 정리
	* splitting.js 추가


	<code> <b>2. js/functions.js </b></code>
	* 많이 사용하는 함수만 모아놓은 js


	<code> <b>3. js/layer_popup.js </b></code>
	* addModalLayer() 추가
	* cm-modal-open-btn 이벤트 수정

	<code> <b>4. js/main.js </b></code>
	* fullpage onLeave 콜백함수 수정
	* 메인js 현재 paging 보여주는 기능 추가
	* 스크롤 아이콘 모션 삭제

	<code> <b>5. js/nav.js </b></code>
	* 전체적으로 정리 및 수정

	<code> <b>6. js/plugin/jquery.fullPage.js </b></code>
	* 버전변경 ( fullPage 2.8.6 => fullPage 2.9.7 )

	<code> <b>7. js/plugin/splitting.min.js </b></code>
	* Splitting js 추가
	
	<code> <b>8. js/plugin/swiper.min.js.map </b></code>
	* swiper.min.js 사용시 필요

	<code> <b>9. js/sub.js </b></code>
	* 전체적으로 정리 및 수정
	* 드래그 해주세요 문구 스크립트로 추가
	* 서브 메뉴 fixed 전체적으로 수정
	
	


***************************

- #### 2020-08-11

  #### * php 파일
	<code> <b>1. /index.php</b></code>
	* header("HTTP/1.1 301 Moved Permanently"); 추가

	<code> <b>2. /kr/etc/agreement.php, /kr/etc/privacy.php, /kr/etc/sitemap.php, /kr/etc/sitemap_02.php</b></code>
	* 상단수정

	<code> <b>3. /kr/include/footer.php</b></code>
	* 모달레이어팝업 주석해제(로딩속도를위해 js에서 html로 이동)


	
  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* 탑버튼 공통으로 쓰기위해 색상변경

	<code> <b>2. /common/css/cm_bbs_common.css </b></code>
	* 게시판 리스트 : 검색영역 수정, 게시판뷰 : 이전글/다음글 추가, 게시판쓰기폼 반응형 최적화 작업

	<code> <b>3. /common/css/cm_online.css </b></code>
	* 주석추가

  #### * js 파일
	<code> <b>1. /js/common.js </b></code>
	* 전체적으로 주석추가 및 정리

	<code> <b>2. /js/layer_popup.js </b></code>
	* 전체적으로 수정 및 함수추가 ★

	<code> <b>1. /js/sub.js </b></code>
	* common.js수정에 따른 수정

***************************

- #### 2020/07/02

  #### * php 파일
	<code> <b>1. /kr/include/dtd.php</b></code>
	* SEO개선을위해 타이틀 순서변경 -> 오류수정
	
	<code> <b>2. /kr/company/sample.php</b></code>
	* SEO 개선을 위해 상단변수추가

***************************

- #### 2020/06/25

  #### * php 파일
	<code> <b>1. /kr/include/dtd.php, /kr/lib/sub.php</b></code>
	* SEO개선을위해 타이틀 순서변경 
	* 게시판 뷰페이지 description 수정

***************************

- #### 2020/06/18

  #### * css 파일
	<code> <b>1. /css/layout.css, 1. /css/layout_responsive.css  </b></code>
	* 서브메뉴 드롭될때 화살표 rotate안되는부분 수정

***************************

- #### 2020/06/17

  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* modal 로딩모션 spin 애니메이션 익스에서 작동안하는 이슈로 수정

  #### * php 파일
	<code> <b>1. /kr/include/header.php</b></code>
	* logo 영역에 적절한 링크텍스트 추가
	* 사이트맵스타일2번 열릴때 방식변경 -> data-event="toggle" 넣으면 사이트맵버튼이 toggle기능을 하게됩니다.

	<code> <b>2. /kr/include/footer.php</b></code>
	* 파트너사 로고에 alt 추가
	* Top버튼에 적절한 링크텍스트 추가
	* family site 다른계열사 홈페이지 이동할때 title="새창으로 열기" 추가

	<code> <b>3. /kr/etc/sitemap_02.php</b></code>
	* 사이트맵 toggle기능 사용하지 않을시 닫기버튼 
	
	<code> <b>4. /kr/index.php, /kr/index_fullpage.php</b></code>
	* 크로스브라우징기준 변경으로 ie9이하부터 팝업창뜨게 변경

	<code> <b>5. /kr/company/sample.php</b></code>
	* 웹접근성에 맞게 수정 (table scope속성)
	

  #### * js 파일
	<code> <b>1. /js/common.js</b></code>

	* (★) detectBrowser() 함수수정 -> ie 버전별 구분을 통합하여 ie로 변경
	* 사이트맵 toggle기능일때/ 아닐때 추가


***************************

- #### 2020/06/10

  #### * css 파일
	<code> <b>1. /css/default.css </b></code>

	* (★) input/select/textarea -> 기본스타일 수정 ( margin:0, padding:0 등 )
	* line-clamp3 수정 / line-clamp4 추가
	
	<code> <b>2. /css/layout.css , /css/layout_responsive.css </b></code>
	* 전체적으로 프리픽스 -ms-,-o-,-moz- 삭제
	* default수정으로 검색영역 수정
	* 헤더 언어선택 버튼, 푸터 패밀리사이트 버튼 css수정
	* 탑버튼 아이콘변경
	* 사이트맵 ver2 추가
	* 서브메뉴 a태그-> button수정

	<code> <b>3. /css/content.css, /css/content_responsive.css</b></code>

	* 서브 탭 스타일 공통으로 수정

	<code> <b>2. /css/main.css </b></code>
	* 전체적으로 프리픽스 -ms-,-o-,-moz- 삭제
	
	<code> <b>4. /css/common/ ~~.css </b></code>

	* 온라인문의 및 게시판 수정 / 스킨추가 등 전반적인수정

	<code> <b>5. /css/plugin/magnific-popup.css </b></code>

	* 모달뜰때 타이틀 font-size 수정
	
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php</b></code>

	* meta name="Author" 삭제 
	* (★) SEO를 위한 <meta>태그 추가 
		```
		<meta name="NaverBot" content="All"/>
		<meta name="NaverBot" content="<?=$site_robots?>"/>
		<meta name="Yeti" content="All"/>
		<meta name="Yeti" content="<?=$site_robots?>"/>
		<meta name="Googlebot" content="All" />
		<meta name="Googlebot" content="<?=$site_robots?>" />
		<meta name="Robots" content="<?=$site_robots?>">
		```

	<code> <b>2. /kr/include/header.php</b></code>
	* 언어선택 오픈버튼 a태그 -> button태그
	* 사이트맵 커스텀버튼 사용안해서 삭제
	* (★) GNB Mobile 메뉴 <a href="javascript:;"> 삭제하고 링크삽입
	* (★) 사이트맵 ver2 추가
	* (★) cm-drop-menu-box 에 data-drop-event 수정 ( click / hover )

	<code> <b>3. /kr/include/footer.php</b></code>
	* 패밀리사이트 오픈버튼 a태그 -> button태그로 변경
	* (★) 네이버웹마스터도구 링크관리 -> 링크 구조 개선필요 요망으로 떠 전체적으로 <a href="javascript:;" onclick="함수"></a> 사용을 지양함
	* 개인정보처리방침/이용약관 수정 
		```
		<a href="<?=$site_url?>/etc/privacy.php" class="cm-modal-open-btn">개인정보처리방침</a>
		```

	<code> <b>4. /kr/include/top.php</b></code>
	* 서브메뉴 2차메뉴 오픈버튼 a태그 -> button태그

	<code> <b>5. /kr/index.php</b></code>

	* Skip 네비게이션 링크 수정 ( #mainContainer -> #mainVisual )
	* 메인비주얼 배경이미지 경로 수정 

	<code> <b>6. /kr/index_fullpage.php</b></code>

	* Skip 네비게이션 링크 수정 ( #mainContainer -> #mainVisual )
	* AOS 예시 추가

	<code> <b>7. /kr/lib/config.php</b></code>

	* $site_author = $seo->author; 삭제


  #### * js 파일
	<code> <b>1. /js/common.js</b></code>

	* (★) detectOS() 함수추가 -> ios와 android 구분을 위해

	* (★) 탭 공통 js 일부수정
	* 드롭메뉴 공통 제이쿼리 수정
		

	<code> <b>2. /js/layer_popup.js</b></code>

	* (★) modal open 이벤트 추가

		```
		// Modal Open
		$(".cm-modal-open-btn").click(function  () {
			if ( $(this).data("url")) {
				var strUrl = $(this).data("url");	// button Tag
			}else {
				var strUrl = $(this).attr("href");	// a Tag
			}
			layerLoad(strUrl);

			return false;
		});
		```

	<code> <b>3. /js/main.js</b></code>

	* (★) Fullpage AOS 효과 추가

	<code> <b>4. /js/sub.js</b></code>
	* addActive 수정
	* 메뉴 Fixed 탭 링크이동일때 추가

	<code> <b>5. /js/nav.js</b></code>
	* 서브메뉴 open 삭제 / 일부수정


***************************


- #### 2020/05/19

  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* 헤더 serchBox 높이값 빈공간생겨 변경
	* footer 메뉴 dot형태 오류 -> 변경
	
	<code> <b>1. /css/layout_responsive.css </b></code>
	* nav-open-btn 색상 변경	

	<code> <b>2. /css/main.css, /css/main_responsive.css</b></code>
	* Slick dots 를 감싸주는 태그 생성 
	``` 
		$mainVisualItem.find(".slick-dots").wrap("<aside class='slick-dots-wrapper'><div class='area-box'></div></aside>");
	```
	* Pause, Play 버튼 생성
	
  #### * php 파일
	<code> <b>1. /kr/index.php, /kr/include/header.php, /kr/include/footer.php</b></code>
	* 개인정보처리방침, 사이트맵 등이 있는 service 폴더를 etc로 변경 => 그에따른 경로변경으로 인한 수정

  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* objectFixed(클래스이름, 시작되는지점) 함수 추가 => 어느지점에서 object가 fixed될때 사용하는 함수 ( 윈10 익스11 스크롤 오류로 인한 변경 )
	* Header Fixed / Top button Fixed 수정

	<code> <b>2. /js/main.js</b></code>
	* Slick dots 를 감싸주는 기능 추가
	* Pause, Play 기능 추가
	* Rightbar Fixed 수정

	<code> <b>2. /js/sub.js</b></code>
	* SubMenu Fixed 수정
	* FixedMoveTab Fixed 수정

***************************

- #### 2020/04/22

  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* 서브비주얼 효과 ↑ => ↓ 로 변경 

	<code> <b>2. /css/content.css, /css/content_responsive.css</b></code>
	* Fixed Tab 일부변경

	
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php</b></code>
	* SEO 이슈로 상단에 들어간 구문 config.php로 이동
	* 벤더프리픽스 자동 삽입가능 플러그인 삭제 -> 파이어폭스에서 css로딩이 느려지는 이슈

	<code> <b>1. /kr/include/top.php </b></code>
	*  기본으로 들어가있는 Fixed 서브메뉴 제거
	
	<code> <b>2. /kr/lib/config.php , /kr/lib/sub.php </b></code>
	*  SEO 이슈 수정 후 메타태그에 title이 제대로 삽입되지않는 오류 수정


  #### * js 파일
	<code> <b>1. /js/sub.js</b></code>
	* Fixed Tab 수정

	<code> <b>2. /js/vendor/prefixfree.min.js</b></code>
	* 삭제

***************************

- #### 2020/04/14

  #### * css 파일
	<code> <b>1. /css/main.css , /css/main_responsive.css</b></code>
	* 메인 컨텐츠 타이틀영역 수정

	<code> <b>2. /css/common/cm_history.php</b></code>
	* history 3번 템플릿 추가

	<code> <b>3. /css/plugin/swiper.css</b></code>
	* 5.3.1 버전 => 5.3.7 버전으로 변경
	
	<code> <b>4. /css/default.css</b></code>
	* .line-clamp2 / .line-clamp3 => display:block 추가 ( 익스에서 display: -webkit-box; 적용되지않는 이슈 )
	
  #### * php 파일
	<code> <b>1. /kr/index.php, /kr/index_fullpage.php </b></code>
	* 타이틀영역 수정

	<code> <b>1. /kr/service/sitemap.php, /kr/service/sitemap_html.php</b></code>
	* 사이트맵 자동으로 삽입되게 수정

  #### * js 파일
	<code> <b>1. /js/plugin/swiper.min.js</b></code>
	* 5.3.1 버전 => 5.3.7 버전으로 변경

***************************

- #### 2020/04/07
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php </b></code>
	* prefixfree.min.js 추가

	<code> <b>2. /kr/include/footer.php </b></code>
	* family site open 공통 js로 변경
	* 모달레이어팝업 주석처리 후 common.js로 이동

	<code> <b>3. /kr/include/header.php </b></code>
	* language open 공통 js로 변경

	<code> <b>4. /kr/company/sample.php </b></code>
	* 전체적으로 정리 및 샘플추가

	<code> <b>5. /kr/service/agreement.php, /kr/service/privacy.php, /kr/service/sitemap.php </b></code>
	* X버튼 네이버아이콘으로 수정

	<code> <b>6. /kr/service/ie8_popup.php </b></code>
	* css경로 reset.css => default.css로 수정
	* 제이쿼리 스크립트 경로 외부 => 서버 경로로 수정
	
	<code> <b>7. /kr/index_fullpage.php </b></code>
	* fullpage 샘플추가
	

  #### * css 파일
	<code> <b>1. /css/layout.css,  /css/layout_responsive.css </b></code>
	* fullpage 예시페이지 추가에 따른 header fixed 추가
	* language open 공통 js로 변경에따른 css 수정
	* GNB 전체메뉴 오류 수정 -> visibility : visible 추가
	* 모달 스타일 수정 -> 배경색 삭제 및 버튼위치조정

	<code> <b>2. /css/main.css,  /css/main_responsive.css </b></code>
	* 메인비주얼 화살표 이미지->폰트로변경
	* Fullpage 추가에 따른 추가사항 수정(rightbar ...)
	
	<code> <b>3. /css/content.css,  /css/content_responsive.css </b></code>
	* 탭 샘플 추가에따른 css 추가

  #### * js 파일
	<code> <b>1. /js/common.js </b></code>
	* 브라우저 체크 함수 추가 (detectBrowser())
	* 순차적으로 active가 붙는 함수 추가 (rollingActive());
	* 브라우저 체크 및 기기체크 클래스 추가
	* 상단 언어 오픈 및 하단 패밀리사이트 js 삭제 => 드롭메뉴 공통 js 추가
	* 공통 tab js 모바일버튼 추가

	<code> <b>2. /js/main.js </b></code>
	* fullpage js 추가
	* 메인비주얼 화살표 추가

	<code> <b>3. /js/sub.js </b></code>
	* 리스트 높이값 맞추는 js 추가

	<code> <b>4. /js/vendor/prefixfree.min.js </b></code>
	* 벤더프리픽스 자동 삽입가능 플러그인 추가

***************************

- #### 2020/03/24
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php </b></code>
	* SEO 이슈로 게시물 타이틀 들어갈 수 있게 수정

	<code> <b>2. /kr/include/header.php </b></code>
	* 주석 수정

	<code> <b>3. /kr/lib/sub.php </b></code>
	* SEO이슈로 수정


  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* #header.over #headerInnerWrap{background-color:#fff } 제거
	* GNB Total Menu transition으로 over 되도록 수정
	

  #### * js 파일
	<code> <b>1. /js/common.js </b></code>
	* Top버튼 fullpage 사용할때 사용가능하게 수정

	<code> <b>2. /js/nav.js </b></code>
	* gnb_total_on() 수정


***************************
- #### 2020/03/18
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php </b></code>
	* 제이쿼리소스 외부서버 가져오는방식 => 내부서버 가져오는방식으로 변경
	* 외부에서 가져오는 폰트 : 기존 http 에서 // 방식으로 변경 ( 생갹하고 지정해주면, 현재 문서의 프로토콜에따라 적합한 리소스 사용 )
	* aos 호출 => common.js로 이동


  #### * css 파일
	<code> <b>1. /css/default.css </b></code>
	* input / select / textarea margin:0, padding:0 추가
	
	<code> <b>2. /css/common/cm_history.css </b></code>
	* 연혁 수정

  #### * js 파일
	<code> <b>1. /js/common.js </b></code>
	* AOS 호출 추가


***************************

- #### 2020/02/28
    
  #### * php 파일
	<code> <b>1. /kr/include/header.php </b></code>
	* 검색버튼 구글아이콘에서 네이버아이콘으로 변경

	<code> <b>1. /kr/include/top.php </b></code>
	* 서브메뉴 display:table 스타일 추가( #topMenu03 )


  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* .header-util-box{right:30px} 변경
	* 검색창 디자인변경 및 탑메뉴03 추가
	* 사이트맵 table-cell로 변경
	
	<code> <b>2. /css/layout_responsive.css </b></code>
	* 검색창 디자인변경 및 탑메뉴03 추가
	* 사이트맵 일부오류수정


***************************

- #### 2020/02/27
    
  #### * php 파일
	<code> <b>1. /kr/index.php </b></code>
	* 외부 서버에서 가져오는 이미지 삭제 후 테스트이미지로 변경


  #### * css 파일
	<code> <b>1. /css/defulat.css </b></code>
	* 이미지 가운데정렬(.img-center) / 이미지 Cover채우기 (.img-cover) / position 모든방향 0px (.pos-full) 추가
	``` 
		.img-center{
			position:absolute;
			top:0px;
			left:0px;
			right:0px;
			bottom:0px;
			max-width:100%;
			max-height:100%;
			margin:auto;
		}
		.img-cover{
			position:absolute;
			top:0px;
			left:0px;
			width:100%;
			height:100%;
		}
		.pos-full{
			position:absolute; 
			top:0px; 
			left:0px; 
			bottom:0px; 
			right:0px;
		} 
	```
	
	<code> <b>2. /css/layout_responsive.css </b></code>
	* min-width:1025px => .area-box / .area 양옆간격 15px 에서 30px조정

	<code> <b>3. /css/common/cm_faq.css </b></code>
	* .faq-list-con .faq-item dd padding값 조정

  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* 파라미터받아온 후 원페이지에서 움직이는 함수추가 ( getParameter() )

***************************

- #### 2020/02/24
    
  #### * php 파일
	<code> <b>1. /kr/index.php </b></code>
	* 상단 조건부주석 변경
	* data-aos 예시 추가
	
	<code> <b>2. /kr/company/sample.php</b></code>
	* magnific popup 예시추가
	
	<code> <b>3. /kr/include/dtd.php</b></code>
	* 기존 ie8.css => ie9.css 수정
	* 스크롤바커스텀, 인증서확대모달 등의 스크립트 삭제


  #### * css 파일
	<code> <b>1. /css/defulat.css </b></code>
	* line133  :  textarea 스타일초기화 추가 / input,select,textarea => box-sizing:border-box; 추가
	
	<code> <b>2. /css/ie8.css 삭제 후, /css/ie9.css 변경 </b></code>
	* ie9 이하부터 작동되는 CSS로 추가

	<code> <b>3. /css/common/cm_bbs_common.css </b></code>
	* paging 버튼 흰색배경 추가
	* 체크박스, 라디오박스 커스텀 추가
	* 공통 버튼 800,480사이즈에서 min-width추가 / width :auto 수정

	<code> <b>4. /css/common/cm_member.css </b></code>
	* 회원폼 레이아웃 수정(max-width:620 => 480px수정)
	* SNS 로그인버튼 Short 버전 
	* Join Step 01단계 CSS수정 및 체크박스 커스텀
	* Join Step 02단계 반응형 최적화작업

	<code> <b>5. /css/plugin/magnific-popup.css </b></code>
	* z-index 수정

	<code> <b>6. /css/plugin/aos.css 추가 </b></code>

	<code> <b>7. /css/plugin/jquery.fullPage.css 추가</b></code>

	<code> <b>8. /css/plugin/swiper.css 추가</b></code>


  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* 전체적으로 많이사용하는부분은 함수화시킴(★) => 함수관련 사용법 숙지해야함
	* 서브에서 사용하는부분은 sub.js로 이동

	<code> <b>2. /js/main.js</b></code>
	* 메인비주얼 selector 변수화

	<code> <b>3. /js/nav.js</b></code>
	* 함수추가로 인한 수정

	<code> <b>4. /js/nav.js</b></code>
	* 함수추가로 인한 수정 및 common.js에서 이동해야할부분 이동(editor, table 등)

	<code> <b>5. /js/ie8_popup.js</b></code>
	* 파일갯수 줄이기위해 삭제 => index.php에 직접선언

	```winPopupOpen("<?=$site_url?>/service/ie8_popup.php","","width=800, height=600, left=0, top=0, resizable=no, scrollbars=no, status=no;");```

	
	<code> <b>6. /js/plugin/aos.js 추가 </b></code>

	<code> <b>7. /js/plugin/jquery.fullPage.js 추가</b></code>

	<code> <b>8. /js/plugin/scrolloverflow.min.js 추가</b></code>

	<code> <b>9. /js/plugin/swiper.min.js 추가</b></code>

	<code> <b>10. /js/plugin/TweenMax.min.js 추가</b></code>

	
 #### * image 파일
	<code> <b>1. /images/content/ci_bg.jpg</b></code>
	* CI 백그라운드(격자무늬) 추가

***************************

- #### 2020/02/10
    
  #### * php 파일
	<code> <b>1. /kr/index.php </b></code>
	* 비주얼영역 버튼 Company view -> Detail View로 수정
	
	<code> <b>2. /kr/include/footer.php</b></code>
	* Footer 주소 및 전화번호 부분 수정 + 스타일 2번추가

  #### * css 파일
	<code> <b>1. /css/defulat.css </b></code>
	* line150  :  editor 기본셋팅 폰트크기 및 색상변경

	<code> <b>2. /css/layout.css ,/css/layout_responsive.css </b></code>
	* Footer 주소 및 전화번호 부분 수정 + 스타일 2번추가 에 따른 css추가

	<code> <b>3. /css/main.css ,/css/main_responsive.css </b></code>
	* 메인비주얼 active-item 관련된 효과 transition->animation으로 수정(★)

	<code> <b>4. /css/common/cm_history.css </b></code>
	* 연혁2번스타일 라인 일부수정

  #### * js 파일
	<code> <b>1. /js/main.js</b></code>
	* 메인비주얼 active-item Slick관련 / 기존 AfterChange -> BeforeChange로 변경(★)

***************************

- #### 2020/01/21
    
  #### * php 파일
	<code> <b>1. /kr/index.php </b></code>
	* 메인비주얼 2번까지만 사용(3번이미지 삭제)
	* 스크롤이미지 삭제
	
	<code> <b>2. /kr/company/ceo.php => sample.php로 변경 </b></code>

	<code> <b>3. /kr/include/header.php, /kr/include/menu_company.php </b></code>
	* 링크변경

	<code> <b>4. /kr/include/fooer.php </b></code>
	* 하단 SNS 아이콘으로 변경

  #### * css 파일
	<code> <b>1. /css/defulat.css </b></code>
	* line587  : over-bg클래스 추가(마우스오버시 bg커지는 효과)

	<code> <b>2. /css/main.css ,/css/main_responsive.css </b></code>
	* 일부분삭제(1번섹션이미지사용, 7번섹션중복코드 삭제)

	<code> <b>3. /css/layout.css ,/css/layout_responsive.css </b></code>
	* 푸터 SNS 아이콘변경으로 인한 css수정

  #### * images 파일
	<code> <b>1. /images/content/~ </b></code>
	* 이미지 경로 정리 및 삭제 / 준비중이미지 변경

***************************

- #### 2020/01/20
    
  #### * php 파일
	<code> <b>1. /kr/company/ceo.php </b></code>
	* 국문이미지파일 샘플삽입
  #### * images 파일
	<code> <b>1. /kr/images/content/ 폴더생성 </b></code>


***************************

- #### 2019/12/26
    
  #### * php 파일
	<code> <b>1. /kr/include/footer.php </b></code>
	* 하단 파트너사 롤링영역 추가
	* 푸터로고 위치 이동

	<code> <b>2. /kr/company/ceo.php </b></code>
	* 상단에붙고 누르면 영역이동하는 moveTab 추가

  #### * js 파일
	<code> <b>1. common.js</b></code>
	* 하단 파트너사 롤링 추가
	
	<code> <b>2. sub.js</b></code>
	* 상단에붙고 누르면 영역이동하는 moveTab 추가

  #### * css 파일
	<code> <b>1. /css/layout.css</b></code>
	* 하단 파트너사 css 추가
	* 서브메뉴 Fixed min-height 기준점 변경
	* 푸터 로고 왼쪽, 오른쪽 모두 추가

	<code> <b>2. /css/layout_responsive.css</b></code>
	* 하단 파트너사 css 추가

	<code> <b>3. /css/content.css, /css/content_responsive.css</b></code>
	* 상단에붙고 누르면 영역이동하는 moveTab css 추가
	
	<code> <b>4. /css/common/cm_bbs_common.css</b></code>
	* 게시판 뷰페이지 수정(border, margin 등)


	<code> <b>5. /css/common/cm_online.css</b></code>
	* 온라인문의3번폼 css수정
	


***************************


- #### 2019/12/02
    
  #### * php 파일
	<code> <b>1. /kr/include/top.php </b></code>
	* 비주얼영역 location 추가
	* <aside id="contentInfoCon"></aside> 위치이동(컨텐츠안으로)

	<code> <b>2. /kr/company/ceo.php </b></code>
	* 컨텐츠가 wide형태로 들어갈경우 상단 style추가

  #### * js 파일
	<code> <b>1. main.js</b></code>
	* fullheight 계산 함수 resize 변경

  #### * css 파일
	<code> <b>1. /css/default.css</b></code>
	* input스타일초기화로 checkbox, radio 스타일 없어지는 문제점 보완

	<code> <b>2. /css/layout.css</b></code>
	* 비주얼영역 위치표시(location) 추가로 인한 스타일변경
	* 상단타이틀영역(contentInfoCon)에 padding->margin변경
	* content영역에 padding추가

	<code> <b>3. /css/layout_responsive.css</b></code>
	* 비주얼영역 위치표시(location) 추가로 인한 반응형 스타일추가
	* 상단타이틀영역(contentInfoCon)에 padding->margin변경
	* content영역에 padding수정
	
	<code> <b>4. /css/common/cm_gallery.css</b></code>
	* 10번갤러리 border영역추가

	<code> <b>5. /css/common/cm_member.css</b></code>
	* SNS로그인 추가 및 css일부수정


***************************


- #### 2019/11/21
    
  #### * php 파일
	<code> <b>1. /kr/lib/config.php </b></code>
	* 주석해제(DB셋팅이 안되어있을경우는 맨위 2줄 주석처리해야합니다)

  #### * js 파일
	<code> <b>1. main.js</b></code>
	* fullheight 계산 함수처리

  #### * images 파일
	<code> <b>1. /images/test/</b></code>
	* 테스트이미지(거인로고) 추가 	

***************************

- #### 2019/11/19
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php </b></code>
	* css선언 경로 변경

  #### * css 파일

	<code> <b>1. common폴더생성후 cm_~ 관련된 css 이동 및 추가</b></code>

	<code> <b>2. main.css / main_responsive.css </b></code>
	* #mainContent > article{padding:65px 0;} 삭제

  #### * js 파일

	<code> <b>1. common폴더생성후 cm_~ 관련된  js 추가</b></code>


***************************

- #### 2019/11/15
    
  #### * php 파일
	<code> <b>1. /kr/company/ceo.php, /kr/company/ceo_ver2.php</b></code>
	* sub_num 03에서 01로 변경 / ceo_ver2 삭제
	
	<code> <b>2. /kr/company/bbs_basic.php </b></code>
	* 기본게시판 소스 추가 ( 추후 설명예정 )
	
	<code> <b>3. /kr/include/dtd.php </b></code>
	* css선언 파일명 변경

	<code> <b>4. /kr/include/menu_company.php </b></code>
	* ceo_ver2.php 링크이동 삭제

	<code> <b>5. /kr/include/top.php </b></code>
	* 서브비주얼 영역 감싸는 태그 생성

	<code> <b>5. /kr/lib/config.php </b></code>
	* 관리자연동소스 상단2줄 주석처리
	
  #### * css 파일

	<code> <b>1. css 삭제</b></code>
	* board.css / board_responsive.css 삭제
	* member.css / member_responsive.css삭제
	* reset.css / editor.css / font.css / common.css 삭제 => 통합

	<code> <b>2. /css/default.css 생성</b></code>
	*  reset.css / editor.css / font.css / common.css 삭제 => 통합
	* reset : a:hover{color:#333; } 삭제, input 스타일초기화, table-layout:fixed 삭제
	* editor : iframe 반응형 css추가
	* layout공통클래스 : default로 이동
	* kakao map border, padding 이슈 초기화
	
	<code> <b>3. /css/cm_bbs_common.css, /css/cm_board.css 생성</b></code>
	* cm_bbs_common.css : 검색, paging, 버튼 등 게시판에 공통적으로 쓰이는 css
	* cm_board.css : 일반게시판 skin

	<code> <b>4. /css/layout.css, /css/layout_responsive.css</b></code>
	* z-index변경(헤더,서브메뉴)

	
  #### * js 폴더
	<code> <b>1. /js/common.js</b></code>
	*에디터 영역에 iframe으로 유투브를 삽입하였을때 태그추가
	

***************************

- #### 2019/10/23
    
  #### * php 파일
	<code> <b>1. /kr/lib/config.php</b></code>
	* 관리자연동소스로 변경
	
	<code> <b>2. /kr/include/header.php </b></code>
	* 언어선택링크 -> ch대신 cn으로
	
	<code> <b>3. /kr/include/dtd.php </b></code>
	* 네이버폰트 추가 ( https://xpressengine.github.io/XEIcon/library-2.3.3.html )
	* 인증서 script 수정
	
  #### * css 파일
	<code> <b>1. /css/plugin/magnific-popup.css</b></code>
	* X버튼크게변경 / zoom효과 추가
	
  #### * images 폴더
	<code> <b>1. /images/test/</b></code>
	* test 폴더 추가
	
	

***************************

- #### 2019/09/27
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php</b></code>
	* SEO최적화로 <link rel="canonical" href="<?=$site_host?>"> 추가

***************************

- #### 2019/09/26
    
  #### * css 파일
	<code> <b>1. /css/reset.css</b></code>
	* table-layout :fixed 넣었더니 반응형에서 테이블속성을 깨는게 힘들어 다시삭제하였습니다.
    
	<code> <b>2. /css/board_resopinsive.css</b></code>
  	* 문의폼/쓰기폼에 phone-fieldset 추가(전화번호 반응형일때 양쪽정렬맞게)
	
	<code> <b>3. /css/layout.css</b></code>
  	* 검색바 transition 속도 

	<code> <b>4. /css/layout_responsive.css</b></code>
  	* 사이트맵 반응형일때 틀어지는부분 수정

	
	<code> <b>5. /css/plugin/jquery.mCustomScrollbar.css</b></code>
  	* 모바일에서 전체스크롤이 안되는 이슈 => 27번째 주석처리 
  
  #### * js 파일
	<code> <b>1. /js/sub.js</b></code>
	* fixed-sub-menu => $(window).scroll() if문 안에 들어가게 변경
    
	<code> <b>2.  /js/nav.js</b></code>
  	* gnb_each_on() 마우스때는지점 수정
	

***************************

- #### 2019/09/10

  #### * php 파일
  <code> <b>1. /kr/include/dtd_ver2.php</b></code>
  <code> <b>2. /kr/include/header_ver2.php</b></code>
    * 삭제
    
  #### * css 파일
  <code> <b>1. /css/layout_menu2.css</b></code>
    * 삭제
    
  <code> <b>2. /css/reset.css</b></code>
  	* table에  table-layout:fixed 추가
	
	<code> <b>3. /css/layout_responsive.css</b></code>
  	* 헤더 검색영역 fixed 시작지점 변경

***************************
  
- #### 2019/09/04

  #### * php 파일
  <code> <b>1. /kr/include/top.php</b></code>
    * 서브비주얼영역 분리 및 효과 추가
    * 서브메뉴 pc,모바일 분리 및 추가 + 아이디값 등 수정 
    * 서브메뉴 fixed 될수있도록 추가 => 서브메뉴가 fixed될때 .fixed-sub-menu 추가
    * #topmenu3 => 텍스트가 길어지면 ... 생기게 처리
    
  <code> <b>2. /kr/include/header.php</b></code>
    * 모바일메뉴 두가지스타일로 수정 및 추가  
      => 기본스타일 : .gnb-style-basic / 
				Full 스타일 : .gnb-style-full
    * 모바일메뉴 언어 및 회원메뉴 추가
    
  #### * css 파일
  <code> <b>1. /css/plugin/slick.css</b></code>
    * Window10 Ie11 이슈로 41번째 주석처리
  <code> <b>2. /css/editor.css</b></code>
    * editor에 url과 같은 긴 텍스트의 a태그가 들어갈때 word-break:break-word; 추가   
    
  <code> <b>3. /css/main.css</b></code>
    * ie에서 메인비주얼 떨리는 부분 수정
    
  <code> <b>4. /css/layout.css, /css/layout_responsive.css</b></code>
    * 공통클래스 추가
    => display:-webkit-box; -webkit-line-clamp 공통클래스로 추가
    * Header 영역 수정
    => 높이관련
    * PC GNB 각각 수정
    * 모바일 GNB 수정 및 추가
    
      => 모든홈페이지에서 사용할 수 있도록 흰색으로 변경     
      => 상단에 언어영역 추가     
      => 로그인, 회원가입 메뉴추가  
      => 스타일 두개로 나눔 
    * 서브비주얼 영역 수정
    => 효과삽입
    * 서브메뉴 수정 및 일부수정
    => pc, 모바일 메뉴분리 및 모바일서브메뉴 1개추가
    * 사이트맵영역 디자인수정
    => css 수정
    
  #### * js 파일
  <code> <b>1. /js/common.js</b></code>
    * 에디터 테이블에 태그넣기
    
  <code> <b>2. /js/nav.js</b></code>
    * pc네비게이션 오픈되는부분 수정
    * 모바일네비게이션 클래스 변경으로 인한 수정
    
  <code> <b>3. /js/main.js</b></code>
    * 메인비주얼 파이어폭스 오류 -> zIndex:1 추가

***************************

- #### 2019/08/29
  <code> <b>1. /kr/include/dtd.php</b></code>  
    * doctype 선언 상단에 빈 영역 삭제    
    * 파비콘 주석처리 시 크롬에서 오류메세지 출력 -> 삭제
    
    =>  <code>```<link rel="Shortcut Icon" href="<?=$site_host?>/favicon.ico">```</code>  
