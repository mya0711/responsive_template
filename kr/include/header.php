	
	<header id="header" class="top-fixed-object"><!-- .top-fixed가 붙는 object에 top-fixed-object 클래스 추가  -->
		<div class="gnb-overlay-bg"></div>
		<div id="headerInnerWrap">
			<!-- ****************** 헤더상단 ********************** -->
			<div id="headerInner">
				<h1 class="logo"><a href="<?=$site_url?>/" title="to home"><img src="<?=$site_host?>/images/common/logo.png" alt="<?=$site_head_title?>" /></a></h1>
				<div class="header-util-box">
					<!-- 통합검색 -->
					<div class="header-search-box">
						<button class="header-search-open-btn" title="Open Search"><i class="xi-search"></i></button>
						<div class="header-search-inner">
							<!-- <form action=""> -->
							<label for="headerSearch" class="blind">Search</label>
							<input type="text" class="header-search-word" id="headerSearch" placeholder="검색어를 입력하세요" />
							<button class="header-search-btn" type="submit" title="Search" onclick="location.href='<?=$site_url?>/search/'"><i class="xi-search"></i></button>
							<!-- </form> -->
							<button class="header-search-close-btn" title="Close"><i class="xi-close-min"></i></button>
						</div>
					</div>
					<!-- 외국어선택 -->
					<div class="header-lang cm-drop-menu-box-JS" data-drop-event="click">
						<button class="lang-open-btn cm-drop-open-btn-JS"><i class="xi-globus"></i><strong>LANGUAGE</strong><span class="arrow"><i class="xi-angle-down-min"></i></span></button>
						<ul id="headerLangList" class="cm-drop-list-JS">
							<li><a href="<?=$site_host?>/en/">ENGLISH</a></li>
							<li><a href="<?=$site_host?>/jp/">JAPANESE</a></li>
							<li><a href="<?=$site_host?>/cn/">CHINESE</a></li>
						</ul>
					</div>
					<!-- 외국어 선택 2 -->
					<div class="header-lang-list">
						<ul class="clearfix">
							<li class="cur"><a href="<?=$site_host?>/kr/">KOR</a></li>
							<li><a href="<?=$site_host?>/en/">ENG</a></li>
						</ul>
					</div>
					<!-- 사이트맵 style 01  -->
					<a href="<?=$site_url?>/sitemap/sitemap_01.php" class="sitemap-line-btn cm-modal-open-btn" title="Open the sitemap">
						<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span>
					</a>
					<!-- 사이트맵 style 02,03,04,05 -->
					<button class="sitemap-line-btn cm-sitemap-open-btn" title="Open the sitemap">
						<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span>
					</button>
				</div>
			</div>
			<!-- ****************** GNB ********************** -->
			<!-- GNB PC  -->
			<nav id="gnb" class="each-menu">
				<h2 class="blind">Menu</h2>
				<!-- 
					- 전체메뉴 : class="total-menu"
					- 각각메뉴 : class="each-menu" + <div id="gnbBg"></div> 삭제
				-->
				<!-- <div id="gnbBg"></div> -->
				<ul class="clearfix area">
					<li class="gnb1">
						<a href="<?=$site_url?>/">Menu1</a>
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
		<button class="nav-open-btn" title="Menu Open">
			<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span>
		</button>
		<div class="gnb-overlay-bg-m"></div>
		<nav id="gnbM" class="gnb-style-basic">
			<!-- 
				기본스타일 : .gnb-style-basic
				Full 스타일 : .gnb-style-full
			-->
			<h2 class="blind">Menu</h2>
			<!-- 언어 선택 or 회원메뉴 사용안할시 삭제 -->
			<div class="header-util-menu-box">
				<!-- 언어 선택 리스트 -->
				<ul class="clearfix lang-select">
					<li class="cur"><a href="<?=$site_host?>/kr/">KR</a></li>
					<li><a href="<?=$site_host?>/en/">EN</a></li>
					<li><a href="<?=$site_host?>/jp/">JP</a></li>
					<li><a href="<?=$site_host?>/cn/">CH</a></li>
				</ul>
				<!-- // -->
				<!-- 회원메뉴 -->
				<ul class="clearfix member-menu-box">
					<?if($mem_row->idx){?>
					<li><a href="<?=$site_url?>/member/modify_01.php"><i class="xi-profile-o"></i><strong>마이페이지</strong></a></li>
					<li><a href="<?=$site_url?>/member/join_01.php"><i class="xi-log-out"></i><strong>로그아웃</strong></a></li>
					<?}else{?>
					<li><a href="<?=$site_url?>/member/login.php"><i class="xi-user-o"></i><strong>로그인</strong></a></li>
					<li><a href="<?=$site_url?>/member/join_01.php"><i class="xi-user-plus-o"></i><strong>회원가입</strong></a></li>
					<?}?>
				</ul>
			</div>
			<!-- // -->
			<div class="gnb-navigation-wrapper">
				<div class="gnb-navigation-inner">
					<ul id="navigation" data-menu-clone="true"></ul><!-- PC메뉴 같을때 true / 같지않으면 false 후 메뉴삽입 -->
				</div>
			</div>
		</nav>
	</header>