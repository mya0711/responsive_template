	
	<header id="header" class="">
		<div class="gnb-overlay-bg"></div>
		<div id="headerInnerWrap">
			<!-- ****************** 헤더상단 ********************** -->
			<div id="headerInner" class="clearfix">
				<h1 class="logo"><a href="<?=$site_url?>/" title="메인으로"><img src="<?=$site_host?>/images/common/logo.png" alt="<?=$site_head_title?>" /></a></h1>
				<div class="header-util-box">
					<!-- 통합검색 -->
					<div class="header-search-box">
						<button class="header-search-open-btn" title="검색창열기"><i class="material-icons">&#xE8B6;</i></button>
						<div class="header-search-inner">
							<!-- <form action=""> -->
								<div class="header-search-inner-box">
									<label for="headerSearch" class="blind">검색</label>
									<input type="text" class="header-search-word" id="headerSearch" placeholder="검색어를 입력하세요" />
									<button class="header-search-btn" type="submit" title="검색" onclick="location.href='<?=$site_url?>/search/'"><i class="material-icons">&#xE8B6;</i></button>
								</div>
							<!-- </form> -->
							<button class="header-search-close-btn" title="검색창닫기"><i class="material-icons">&#xE14C;</i></button>
						</div>
					</div>
					<!-- 외국어선택 -->
					<div class="header-lang">
						<a href="javascript:;" class="lang-open-btn"><i class="material-icons">&#xE894;</i><strong>LANGUAGE</strong><span class="arrow"><i class="material-icons">&#xE313;</i></span></a>
						<ul>
							<li><a href="<?=$site_host?>/en/">ENGLISH</a></li>
							<li><a href="<?=$site_host?>/jp/">JAPANESE</a></li>
							<li><a href="<?=$site_host?>/ch/">CHINESE</a></li>
						</ul>
					</div>
					<!-- 사이트맵 버튼 ( 기본 라인 三 ) -->
					<button  onclick="javascript:layerLoad('<?=$site_url?>/service/sitemap.php'); return false;" class="sitemap-line-btn sitemap-open-btn" title="사이트맵 열기">
						<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span><!-- <span class="line line4"></span> -->
					</button>
					<!-- 사이트맵 버튼 2 ( 커스텀 버튼 ) -->
					<!-- <button  onclick="javascript:layerLoad('<?=$site_url?>/service/sitemap.php'); return false;" class="sitemap-custom-btn sitemap-open-btn" title="사이트맵 열기">
						<i class="material-icons">&#xE8DE;</i>
					</button> -->
				</div>
			</div>
			<!-- ****************** GNB ********************** -->
			<!-- GNB PC -->
			<nav id="gnb" class="each-menu">
				<h2 class="blind">주메뉴</h2>
				<!-- 
					- 전체메뉴 : class="total-menu"
					- 각각메뉴 : class="each-menu" + <div id="gnbBg"></div> 삭제
				-->
				<!-- <div id="gnbBg"></div> -->
				<ul class="area clearfix menu6">	<!-- menu5개 : .menu5 / menu6개 : .menu6 / menu7개 : .menu7 / menu8개 : .menu8 -->
					<li>
						<a href="<?=$site_url?>/company/ceo_ver2.php">menu1</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li>
						<a href="">menu2</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li>
						<a href="">menu3</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li>
						<a href="">menu4</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li>
						<a href="">menu5</a>
						<div class="gnb-2dep">
							<ul>
								<? // include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li>
						<a href="">menu6</a>
						<div class="gnb-2dep">
							<ul>
								<? // include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<!-- GNB Mobile -->
		<button class="nav-open-btn" title="네비게이션 열기">
			<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span><!-- <span class="line line4"></span> -->
		</button>
		<div class="gnb-overlay-bg-m"></div>
		<nav id="gnbM">
			<h2 class="blind">주메뉴</h2>
			<ul id="navigation">
				<li>
					<a href="javascript:;">menu1</a>
					<ul class="gnb-2dep">
						<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
					</ul>
				</li>
				<li>
					<a href="javascript:;">menu2</a>
					<ul class="gnb-2dep">
						<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
					</ul>
				</li>
				<li>
					<a href="javascript:;">menu3</a>
					<ul class="gnb-2dep">
						<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
					</ul>
				</li>
				<li>
					<a href="javascript:;">menu4</a>
					<ul class="gnb-2dep">
						<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
					</ul>
				</li>
				<li>
					<a href="javascript:;">menu5</a>
					<ul class="gnb-2dep">
						<? // include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
					</ul>
				</li>
				<li>
					<a href="javascript:;">menu6</a>
					<ul class="gnb-2dep">
						<? // include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
					</ul>
				</li>
				<li>
					<a href="javascript:;">menu7</a>
					<ul class="gnb-2dep">
						<? // include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
					</ul>
				</li>
				<li>
					<a href="javascript:;">menu8</a>
					<ul class="gnb-2dep">
						<? // include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
					</ul>
				</li>
			</ul>
		</nav>
	</header>