# responsive_template
Responsive Website Template

* Giantsoft Publisher Team
* Writer : Jang Mi Hwa
* UpDate : 2020-01-21
  

## 업데이트 내역

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
