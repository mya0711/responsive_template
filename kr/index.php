<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "./lib/config.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
</head>

<body>
<!-- accessibility -->
<div class="cm-accessibility">
	<a href="#mainVisual">본문바로가기</a>
</div>
<!-- //accessibility -->
<!-- code -->
<div id="wrap">
	<!-- header -->
	<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/header.php"; ?>
	<!-- //header -->
	<!-- container -->
	<div id="mainContainer">
		<!-- ****************** 메인비주얼 ********************** -->
		<section id="mainVisual" class="full-height">
			<article class="main-visual-con">
				<div class="main-visual-item">
					<div class="main-visual-img main-visual-pc-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_01.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-img main-visual-m-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_01_m.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-box area-box">
							<div class="main-visual-txt-inner">
								<p class="main-visual-txt1 cm-word-split-JS" data-splitting data-css-property="animation" data-speed="0.03" data-speed-delay="0.3" translate="no">giantsoft Stand in the world 11</p>
								<p class="main-visual-txt2"><b>거인소프트</b> 반응형 </p>
								<p class="main-visual-txt3">언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
								<a href="" class="main-visual-more-btn">DETAIL VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="main-visual-item">
					<div class="main-visual-img main-visual-pc-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_02.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-img main-visual-m-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_02_m.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-box area-box">
							<div class="main-visual-txt-inner">
								<p class="main-visual-txt1 cm-word-split-JS" data-splitting data-css-property="animation" data-speed="0.03" data-speed-delay="0.3" translate="no">giantsoft Stand in the world 22</p>
								<p class="main-visual-txt2"><b>거인소프트</b> 반응형 </p>
								<p class="main-visual-txt3">언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
								<a href="" class="main-visual-more-btn">DETAIL VIEW</a>
							</div>
						</div>
					</div>
				</div>
			</article>
			<!-- 비주얼 텍스트 고정일때 -->
			<!-- <article class="main-visual-txt-con main-visual-fixed-txt-con">
				<div class="main-visual-txt-box area-box">
					<div class="main-visual-txt-inner">
						<h2 class="main-visual-txt1 cm-word-split-JS" data-splitting data-css-property="animation" data-speed="0.03" data-speed-delay="0.3" translate="no">giantsoft Stand in the world 11</h2>
						<p class="main-visual-txt2"><b>거인소프트</b> 반응형 </p>
						<p class="main-visual-txt3">언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
						<a href="" class="main-visual-more-btn">DETAIL VIEW</a>
					</div>
				</div>
			</article> -->
			<div class="main-scroll-icon">
				<span>SCROLL DOWN</span>
			</div>
			<aside class="main-visual-conuter">
				<div class="area-box"><span class="cur-num">1</span><em class="middle">/</em><span class="total-num"></span></div>
			</aside>
		</section>
		<!-- ****************** 메인컨텐츠 ********************** -->
		<section id="mainContent">
			<!-- ****************** 메인컨텐츠 1 (퀵메뉴) ********************** -->
			<article id="mainContent1">
				<div class="area-box">
					<div class="main-tit-box scroll-object" data-scroll="fade">
						<h3 class="main-tit cm-word-split-JS" data-splitting data-css-property="transition" data-speed="0.03" data-speed-delay="0"><strong>메인</strong> 컨텐츠 타이틀</h3>
						<p class="main-sub-tit" data-scroll="fade-up"><span>타이틀 서브 텍스트가 들어갑니다 </span> <span> span태그안에 넣으면 모바일에서 줄바꿈이 됩니다.</span></p>
					</div>
					<ul class="main-quick-menu-list clearfix scroll-object" data-scroll="fade-up">
						<li class="quick-menu-item quick-menu-item1" data-scroll="fade-up" data-scroll-delay="100">
							<a href="">
								<div class="quick-menu-item-inner">
									<p class="item-txt-box">
										<strong class="item-tit">1,234,567</strong>
										<span class="item-sub-tit">Giantsoft Stand in the world</span>
										<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
									</p>
								</div>
								<div class="over-thum"></div>
							</a>
						</li>
						<li class="quick-menu-item quick-menu-item2" data-scroll="fade-up" data-scroll-delay="250">
							<a href="">
								<div class="quick-menu-item-inner">
									<p class="item-txt-box">
										<strong class="item-tit">Giantsoft Business</strong>
										<span class="item-sub-tit">Giantsoft Stand in the world</span>
										<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
									</p>
								</div>
								<div class="over-thum"></div>
							</a>
						</li>
						<li class="quick-menu-item quick-menu-item3" data-scroll="fade-up" data-scroll-delay="400">
							<a href="">
								<div class="quick-menu-item-inner">
									<p class="item-txt-box">
										<strong class="item-tit">Giantsoft Business</strong>
										<span class="item-sub-tit">Giantsoft Stand in the world</span>
										<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
									</p>
								</div>
								<div class="over-thum"></div>
							</a>
						</li>
						<li class="quick-menu-item quick-menu-item4" data-scroll="fade-up" data-scroll-delay="550">
							<a href="">
								<div class="quick-menu-item-inner">
									<p class="item-txt-box">
										<strong class="item-tit">Giantsoft Business</strong>
										<span class="item-sub-tit">Giantsoft Stand in the world</span>
										<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
									</p>
								</div>
								<div class="over-thum"></div>
							</a>
						</li>
					</ul>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 2 (갤러리) ********************** -->
			<article id="mainContent2">
				<div class="area">
					<div class="main-tit-box" data-scroll>
						<h3 class="main-tit cm-word-split-JS" data-splitting data-css-property="transition" data-speed="0.03" data-speed-delay="0"><strong>메인</strong> 컨텐츠 타이틀</h3>
						<p class="main-sub-tit" data-scroll="fade-up"><span>타이틀 서브 텍스트가 들어갑니다 </span> <span> span태그안에 넣으면 모바일에서 줄바꿈이 됩니다.</span></p>
					</div>
					<ul class="main-news-list clearfix" data-scroll="fade-up">
						<li>
							<a href="">
								<span class="bbs-inner-thumb over-img"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" class="img-full" /></span>
								<div class="bbs-inner-con">
									<strong class="bbs-category">카테고리</strong>
									<strong class="bbs-tit line2">Giantsoft Sttand in the world</strong>
									<p class="bbs-content line3">
										홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 제작하는것이 이슈가 되고 있습니다. 보다 실용적이며 효과적인 구축하기위한 우리의 노력은 오늘도 계속되고 있습니다.
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<span class="bbs-inner-thumb over-img"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" class="img-full" /></span>
								<div class="bbs-inner-con">
									<strong class="bbs-category">카테고리</strong>
									<strong class="bbs-tit line2">Giantsoft Sttand in the world</strong>
									<p class="bbs-content line3">
										홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 제작하는것이 이슈가 되고 있습니다. 보다 실용적이며 효과적인 구축하기위한 우리의 노력은 오늘도 계속되고 있습니다.
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<span class="bbs-inner-thumb over-img"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" class="img-full" /></span>
								<div class="bbs-inner-con">
									<strong class="bbs-category">카테고리</strong>
									<strong class="bbs-tit">제목이 길어도 한줄로 표시됩니다</strong>
									<p class="bbs-content line3">
										홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 제작하는것이 이슈가 되고 있습니다. 보다 실용적이며 효과적인 구축하기위한 우리의 노력은 오늘도 계속되고 있습니다.
									</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 3 (갤러리 슬라이드) ********************** -->
			<article id="mainContent3">
				<div class="area">
					<div class="main-tit-box">
						<h3 class="main-tit">해당영역갔을때 slickPlay 됩니다</h3>
						<p class="main-sub-tit"><span>타이틀 서브 텍스트가 들어갑니다 </span> <span> span태그안에 넣으면 모바일에서 줄바꿈이 됩니다.</span></p>
					</div>
					<article class="main-gallery-rolling-con">
						<ul class="bbs-basic-gallery-con start-autoplay-scroll-object" data-scroll="fade-up">
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
						</ul>
					</article>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 4 (갤러리 + 설명 슬라이드) ********************** -->
			<article id="mainContent4">
				<div class="area">
					<div class="main-tit-box">
						<h3 class="main-tit"><strong>메인</strong> 컨텐츠 타이틀</h3>
						<p class="main-sub-tit"><span>타이틀 서브 텍스트가 들어갑니다 </span> <span>타이틀 서브 텍스트가 들어갑니다</span></p>
					</div>
					<div class="main-slide-box clearfix">
						<div class="main-slide-photo-con">
							<div class="main-slide-photo-item"><div class="slide-photo-inner"><p style="position:absolute; top:0; left:0; color:#fff; font-size:50px;">1 <br>왼쪽사진+오른쪽설명글 롤링</p></div></div>
							<div class="main-slide-photo-item"><div class="slide-photo-inner"><p style="position:absolute; top:0; left:0; color:#fff; font-size:50px;">2 <br>왼쪽사진+오른쪽설명글 롤링</p></div></div>
							<div class="main-slide-photo-item"><div class="slide-photo-inner"><p style="position:absolute; top:0; left:0; color:#fff; font-size:50px;">3 <br>왼쪽사진+오른쪽설명글 롤링</p></div></div>
						</div>
						<div class="main-slide-text-con">
							<div class="main-slide-text-item">
								<strong class="main-slide-tit">Giantsoft Stand in the world 1111</strong>
								<p class="main-slide-txt">
									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 노력은 
									오늘도 계속되고 있습니다.<br><br>

									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 
									노력은 오늘도 계속되고 있습니다.
								</p>
								<a href="" class="main-slide-btn">자세히보기</a>
							</div>
							<div class="main-slide-text-item">
								<strong class="main-slide-tit">Giantsoft Stand in the world 2222</strong>
								<p class="main-slide-txt">
									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 노력은 
									오늘도 계속되고 있습니다.<br><br>

									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 
									노력은 오늘도 계속되고 있습니다.
								</p>
								<a href="" class="main-slide-btn">자세히보기</a>
							</div>
							<div class="main-slide-text-item">
								<strong class="main-slide-tit">Giantsoft Stand in the world 3333</strong>
								<p class="main-slide-txt">
									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 노력은 
									오늘도 계속되고 있습니다.<br><br>

									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 
									노력은 오늘도 계속되고 있습니다.
								</p>
								<a href="" class="main-slide-btn">자세히보기</a>
							</div>
						</div>
					</div>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 5 (FIXED 배너) ********************** -->
			<article id="mainContent5">
				<div class="main-fixed-con">
					<p class="main-fixed-sub-tit">giantsoft Stand in the world</p>
					<h3 class="main-fixed-tit">거인소프트반응형</h3>
					<p class="main-fixed-txt">스크롤 시 배경이 고정되고 텍스트만 스크롤됨  / 스크롤 시 배경이 고정되고 텍스트만 스크롤됨  / 스크롤 시 배경이 고정되고 텍스트만 스크롤됨 </p>
					<a href="" class="main-fixed-more-btn trans400">COMPANY VIEW</a>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 6 (사각, 원 배너들) ********************** -->
			<article id="mainContent6">
				<div class="area">
					<ul class="main-banner-list-con">
						<li>
							<a href="">
								<div class="banner-thumb over-img"><img src="<?=$site_host?>/images/test/test_img4.jpg" alt="" /></div>
								<div class="banner-inner-box">
									<p class="banner-tit">giantsoft Stand in the world</p>
									<strong class="banner-sub-tit">거인소프트 베너</strong>
									<span class="banner-sub-txt">오버시 이미지 확대</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="banner-thumb over-img"></div>
								<div class="banner-inner-box">
									<p class="banner-tit">giantsoft Stand in the world</p>
									<strong class="banner-sub-tit">거인소프트 베너</strong>
									<span class="banner-sub-txt">오버시 이미지 확대</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 7 (100% 풀배너) ********************** -->
			<article id="mainContent7">
				<div class="main-full-banner-box clearfix">
					<div class="main-full-banner-left area">
						<div class="full-banner-inner">
							<strong>Giantsoft Stand in the world</strong>
							<p>언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
						</div>
					</div>
					<div class="main-full-banner-right">
						<div class="full-banner-inner">
							<strong>Giantsoft Stand in the world</strong>
							<p>언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
						</div>
					</div>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 8 (Global Network)********************** -->
			<article id="mainContent8">
				<div class="area">
					<div class="main-tit-box">
						<h3 class="main-tit"><strong>메인</strong> 컨텐츠 타이틀</h3>
						<p class="main-sub-tit"><span>타이틀 서브 텍스트가 들어갑니다 </span> <span>타이틀 서브 텍스트가 들어갑니다</span></p>
					</div>
					<div class="global-map-con">
						<img src="<?=$site_host?>/images/test/test_img4.jpg" alt="세계지도" />
						<div class="global-nation-box">
							<!-- 기준은 left :50%; top:0; 이며, margin-left값과 top으로 위치 조정해주셔야 합니다. -->
							<div class="nation-circle" title="국가1" style="margin-left:344px; top:222px"><span></span><span></span><span></span><span></span><i></i><p>giantsoft Global Network 국가1</p></div>
							<div class="nation-circle" title="국가2" style="margin-left:-359px; top:386px"><span></span><span></span><span></span><span></span><i></i><p>giantsoft Global Network 국가2</p></div>
							<div class="nation-circle" title="국가3" style="margin-left:-289px; top:334px"><span></span><span></span><span></span><span></span><i></i><p>giantsoft Global Network 국가3</p></div>
							<div class="nation-circle" title="국가4" style="margin-left:-501px; top:69px"><span></span><span></span><span></span><span></span><i></i><p>giantsoft Global Network 국가4</p></div>
							<div class="nation-circle" title="국가5" style="margin-left:-59px; top:166px"><span></span><span></span><span></span><span></span><i></i><p>giantsoft Global Network 국가5</p></div>
						</div>
					</div>
					<div class="global-map-con-m">
						<img src="<?=$site_host?>/images/test/test_img4.jpg" alt="세계지도" />
					</div>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 9 (공지사항 게시판 + 배너)********************** -->
			<article id="mainContent9">
				<div class="area clearfix">
					<div class="main-board-box">
						<h3 class="main-board-tit">Giantsoft News</h3>
						<ul class="main-board-con">
							<li><a href="" class="bbs-tit">홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다</a><span class="bbs-date">2018-03-29</span></li>
							<li><a href="" class="bbs-tit">홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다 홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다</a><span class="bbs-date">2018-03-29</span></li>
							<li><a href="" class="bbs-tit">홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다</a><span class="bbs-date">2018-03-29</span></li>
							<li><a href="" class="bbs-tit">홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다</a><span class="bbs-date">2018-03-29</span></li>
							<li><a href="" class="bbs-tit">홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다</a><span class="bbs-date">2018-03-29</span></li>
						</ul>
						<a href="" class="board-more-btn" title="공지사항 페이지로 이동"><i class="xi-hamburger-out"></i></a>
					</div>
					<div class="main-board-banner-con">
						<ul>
							<li>
								<a href="">
									<span class="main-board-banner-thumb"><img src="<?=$site_host?>/images/test/test_img3.jpg" alt="" /></span>
									<div class="main-board-thumb-cover">
										<p><strong>Giantsoft News</strong></p>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<span class="main-board-banner-thumb"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 10 (Swiper 예제)********************** -->
			<article id="mainContent10">
				<div class="area">
					<div class="main-gallery-rolling-con2 swiper-container">
						<ul class="bbs-basic-gallery-con swiper-wrapper">
							<li class="swiper-slide">
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li class="swiper-slide">
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li class="swiper-slide">
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li class="swiper-slide">
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li class="swiper-slide">
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li class="swiper-slide">
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li class="swiper-slide">
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
							<li class="swiper-slide">
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day">16.08.30</span>
									</div>
								</a>
							</li>
						</ul>
						<div class="main-news-swiper-controls">
							<div class="swiper-scrollbar"></div>
							<button title="Prev" class="arrow-prev"><i class="xi-angle-left-min"></i></button>
							<button title="Next" class="arrow-next"><i class="xi-angle-right-min"></i></button>
						</div>
					</div>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 10 (배경 축소 애니메이션)********************** -->
			<section id="mainContent11" class="cm-pr">
				<div class="main-section-bg" data-scroll><div class="main-section-bg-inner" style="background:#fff url(<?=$site_host?>/images/main/main_visual_01.jpg) no-repeat 50% 50% / cover;"></div></div>
				<div class="area">
					<div class="main-tit-box scroll-object" data-scroll="fade" data-scroll-offset="100%">
						<h3 class="main-tit cm-word-split-JS" data-splitting data-css-property="transition" data-speed="0.03" data-speed-delay="0"><strong>메인</strong> 컨텐츠 타이틀</h3>
						<p class="main-sub-tit" data-scroll="fade-up"><span>타이틀 서브 텍스트가 들어갑니다 </span> <span> span태그안에 넣으면 모바일에서 줄바꿈이 됩니다.</span></p>
					</div>
				</div>
			</section>
		</section>
		<!-- ****************** 퀵메뉴 ********************** -->
		<aside id="rightBar">
			<ul>
				<li><a href="" title="○○페이지 바로가기"><i class="xi-home-o"></i></a></li>
				<li><a href="" title="○○페이지 바로가기"><i class="xi-user-o"></i></a></li>
				<li><a href="" title="○○페이지 바로가기"><i class="xi-cart-o"></i></a></li>
				<li><a href="" title="○○페이지 바로가기"><i class="xi-share-alt-o"></i></a></li>
				<li><a href="" title="○○페이지 바로가기"><i class="xi-star-o"></i></a></li>
			</ul>
		</aside>
	</div>
	<!-- //container -->
	<!-- footer -->
	<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/footer.php"; ?>
	<!-- //footer -->
	<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/sitemap/sitemap_03.php"; ?>
</div>
<!-- //wrap -->
<script>
	dep1 = 0,
	dep2 = 0;
</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/scripts.php"; ?>
<script type="text/javascript" src="<?=$site_host?>/js/main.js"></script>
<?
if($tools->device()=="mobile"){
	include $_SERVER['DOCUMENT_ROOT']."/in_popup_m.php";
}else{
	include $_SERVER['DOCUMENT_ROOT']."/in_popup.php";
}
?>
</body>
</html>
