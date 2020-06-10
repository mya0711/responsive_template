	
	<header id="header" class="">
		<div class="gnb-overlay-bg"></div>
		<div id="headerInnerWrap">
			<!-- ****************** 헤더상단 ********************** -->
			<div id="headerInner" class="clearfix">
				<h1 class="logo"><a href="<?=$site_url?>/" title="메인으로"><img src="<?=$site_host?>/images/common/logo.png" alt="<?=$site_head_title?>" /></a></h1>
				<div class="header-util-box">
					<!-- 통합검색 -->
					<div class="header-search-box">
						<button class="header-search-open-btn" title="검색창열기"><i class="xi-search"></i></button>
						<div class="header-search-inner">
							<!-- <form action=""> -->
								<div class="header-search-inner-box">
									<label for="headerSearch" class="blind">검색</label>
									<input type="text" class="header-search-word" id="headerSearch" placeholder="검색어를 입력하세요" />
									<button class="header-search-btn" type="submit" title="검색" onclick="location.href='<?=$site_url?>/search/'"><i class="xi-search"></i></button>
								</div>
							<!-- </form> -->
							<button class="header-search-close-btn" title="검색창닫기"><i class="xi-close-min"></i></button>
						</div>
					</div>
					<!-- 외국어선택 -->
					<div class="header-lang cm-drop-menu-box">
						<button class="lang-open-btn cm-drop-open-btn"><i class="xi-globus"></i><strong>LANGUAGE</strong><span class="arrow"><i class="material-icons">&#xE313;</i></span></button>
						<ul id="headerLangList" class="cm-drop-list">
							<li><a href="<?=$site_host?>/en/">ENGLISH</a></li>
							<li><a href="<?=$site_host?>/jp/">JAPANESE</a></li>
							<li><a href="<?=$site_host?>/cn/">CHINESE</a></li>
						</ul>
					</div>
					<!-- 사이트맵 버튼 ( 기본 라인 三 ) -->
					<button data-url="<?=$site_url?>/etc/sitemap.php" class="sitemap-line-btn cm-modal-open-btn" title="사이트맵 열기">
						<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span><!-- <span class="line line4"></span> -->
					</button>
				</div>
			</div>
			<!-- ****************** GNB ********************** -->
			<!-- GNB PC  -->
			<nav id="gnb" class="each-menu">
				<h2 class="blind">주메뉴</h2>
				<!-- 
					- 전체메뉴 : class="total-menu"
					- 각각메뉴 : class="each-menu" + <div id="gnbBg"></div> 삭제
				-->
				<!-- <div id="gnbBg"></div> -->
				<ul class="clearfix menu5 area">
					<li class="gnb1">
						<a href="<?=$site_url?>/company/sample.php">Menu1</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb2">
						<a href="">Menu2</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb3">
						<a href="">Menu3</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb4">
						<a href="">Menu4</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb5">
						<a href="">Menu5</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<!-- GNB Mobile -->
		<button class="nav-open-btn" title="네비게이션 열기">
			<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span>
		</button>
		<div class="gnb-overlay-bg-m"></div>
		<nav id="gnbM" class="gnb-style-full">
			<!-- 
				기본스타일 : .gnb-style-basic
				Full 스타일 : .gnb-style-full
			-->
			<h2 class="blind">주메뉴</h2>
			<!-- 언어 선택 or 회원메뉴 사용안할시 삭제 -->
			<div class="header-util-menu-box">
				<!-- 언어 선택 리스트 -->
				<!-- <ul class="clearfix lang-select">
					<li class="cur"><a href="<?=$site_host?>/kr/">KR</a></li>
					<li><a href="<?=$site_host?>/en/">EN</a></li>
					<li><a href="<?=$site_host?>/jp/">JP</a></li>
					<li><a href="<?=$site_host?>/cn/">CH</a></li>
				</ul> -->
				<!-- // -->
				<!-- 회원메뉴 -->
				<ul class="clearfix member-menu-box">
					<li><a href="<?=$site_url?>/member/login.php"><i class="material-icons">&#xe7ff;</i><strong>로그인</strong></a></li>
					<li><a href="<?=$site_url?>/member/join_01.php"><i class="material-icons">&#xe7fe;</i><strong>회원가입</strong></a></li>
					<li style="display:none;"><a href="<?=$site_url?>/member/modify_01.php"><i class="material-icons">&#xe853;</i><strong>마이페이지</strong></a></li>
					<li style="display:none;"><a href="<?=$site_url?>/member/join_01.php"><i class="material-icons">&#xe890;</i><strong>로그아웃</strong></a></li>
				</ul>
			</div>
			<!-- // -->
			<div class="gnb-navigation-wrapper">
				<div class="gnb-navigation-inner">
					<ul id="navigation">
						<li>
							<a href="<?=$site_url?>/company/sample.php">Menu1</a>
							<ul class="gnb-2dep">
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</li>
						<li>
							<a href="<?=$site_url?>/">Menu2</a>
							<ul class="gnb-2dep">
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</li>
						<li>
							<a href="<?=$site_url?>/">Menu3</a>
							<ul class="gnb-2dep">
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</li>
						<li>
							<a href="<?=$site_url?>/">Menu4</a>
							<ul class="gnb-2dep">
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>