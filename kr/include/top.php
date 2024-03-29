<script>
	<? if ( $page_section == "company" ) { ?>	//  1번째  대메뉴 인덱스
		dep1 = 1
	<? }else if ( $page_section == "" ) { ?>	//  2번째 대메뉴 인덱스
		dep1 = 2
	<? }else if ( $page_section == "" ) { ?>	//   3번째  대메뉴 인덱스
		dep1 = 3
	<? }else if ( $page_section == "" ) { ?> //  4번째  대메뉴 인덱스
		dep1 = 4	
	<? }else { ?>
		dep1 = 0	
	<? } ?>
	
	// dep1 = <?=$page_num?>,
	dep2 = <?=$sub_num?>;

	// sub2_num 변수가 있을때 ( 3차메뉴 )
	<? if( $sub_num2 ){ ?>
			dep3 = <?=$sub_num2?>;
	<? } else { ?>
			dep3 = "";
	<? } ?>
</script>
</head>

<body>
<!-- accessibility -->
<div class="cm-accessibility">
	<a href="#container">본문바로가기</a>
</div>
<!-- //accessibility -->
<!-- code -->
<div id="wrap">
	<!-- header -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/header.php"; ?>
	<!-- //header -->
	<!-- container -->
	<div id="container">
		<!-- visual -->
		<?if($page_section != "search" ){?>
		<section id="visual" class="sub-visual-<?=$page_section?>">
			<div class="visual-img-con">
				<div class="visual-img-inner" style="background:#eee url(<?=$site_host?>/images/layout/sub_visual_<?=$page_section?>.jpg) no-repeat 50% 0%"></div>
			</div>
			<div class="area visual-txt-con">
				<div class="table-cell-layout">
					<div class="visual-txt-container">
						<h2 class="visual-tit trans400">
							<?=$page_info?>
						</h2>
						<p class="visual-sub-txt"><?=$page_section?> / 서브텍스트가 들어갑니다.</p>
						<div class="location">
							<ul>
								<li><a href="<?=$site_url?>/index.php" title="HOME"><i class="xi-home"></i></a></li>
								<li><?=$page_info?></li>
								<?if($sub_info){?><li><?=$sub_info?></li><?}?>
							</ul>
						</div>
						<a href="#none" class="sub-page-controls-btn sub-prev-page-btn" title="Prev Page"><span><i class="xi-angle-left-thin"></i></span><strong class="sub-page-name"></strong></a>
						<a href="#none" class="sub-page-controls-btn sub-next-page-btn" title="Next Page"><strong class="sub-page-name"></strong><span><i class="xi-angle-right-thin"></i></span></a>
					</div>
				</div>
			</div>
		</section>
		<?}?>
		<!-- //visual -->
		<!-- middleArea -->
		<div id="middleArea">
			<!-- ****************** 서브메뉴 ********************** -->
			<?if($page_section != "search" ){?>
			<!--  모든 서브메뉴 : fixed될때 fixed-sub-menu, top-fixed-object 클래스 추가  -->
			<!-- 서브메뉴1 -->
			<aside id="topMenu01" class="fixed-sub-menu top-fixed-object">
				<div class="side-menu-inner">
					<div class="area">
						<ul class="snb sub-menu-<?=$page_section?> clearfix">
							<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
						</ul>
					</div>
				</div>
			</aside>
			<!-- // -->
			<!-- 서브메뉴 2 -->
			<aside id="topMenu02" class="">
				<div class="side-menu-inner">
					<div class="area">
						<ul class="snb sub-menu-<?=$page_section?> clearfix">
							<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
						</ul>
					</div>
				</div>
			</aside>
			<!-- // -->
			
			<!-- 서브메뉴 3 -->
			<aside id="topMenu03" class="">
				<div class="side-menu-inner">
					<div class="area">
						<ul class="snb sub-menu-<?=$page_section?>">
							<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
						</ul>
					</div>
				</div>
			</aside>
			<!-- // -->

			<!-- 서브메뉴 4(PC,모바일 모두사용가능) -->
			<aside id="topMenu04" class="">
				<div class="side-menu-inner">
					<div class="cm-top-menu area clearfix">
						<a href="<?=$site_url?>/" class="location-to-home-btn" title="메인으로"><i class="xi-home"></i></a>
						<div class="menu-location location1 cm-drop-menu-box-JS" data-drop-event="click">
							<button class="cur-location cm-drop-open-btn-JS">
								<span><?=$page_info?></span>
								<i class="xi-angle-down-min arrow"></i>
							</button>
							<ul class="location-menu-con cm-drop-list-JS">
								<li><a href="<?=$site_url?>/">대메뉴1</a></li>
								<li><a href="<?=$site_url?>/">대메뉴2</a></li>
								<li><a href="<?=$site_url?>/">대메뉴3</a></li>
							</ul>
						</div>
						<div class="menu-location location2 cm-drop-menu-box-JS" data-drop-event="click">
							<button class="cur-location cm-drop-open-btn-JS">
								<span><?=$sub_info?></span>
								<i class="xi-angle-down-min arrow"></i>
							</button>
							<ul class="location-menu-con cm-drop-list-JS">
								<?  include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
							</ul>
						</div>
					</div>
				</div>
			</aside>
			<!-- // -->
			<!-- 모바일 서브메뉴 1 -->
			<aside id="topMenuM" class="cm-top-menu clearfix">
				<div class="top-menu-wrapper">
					<a href="<?=$site_url?>/" class="location-to-home-btn" title="홈으로 바로가기"><i class="xi-home"></i></a>
					<div class="top-menu-inner clearfix menu-2dep"><!-- 2차메뉴가 있을때 menu-2dep 추가 -->
						<!-- 1차메뉴 -->
						<div class="menu-location location1 cm-drop-menu-box-JS" data-drop-event="click">
							<button class="cur-location cm-drop-open-btn-JS">
								<span><?=$page_info?></span>
								<i class="xi-angle-down-min arrow"></i>
							</button>
							<ul class="location-menu-con cm-drop-list-JS">
								<li><a href="<?=$site_url?>/">대메뉴1</a></li>
								<li><a href="<?=$site_url?>/">대메뉴2</a></li>
								<li><a href="<?=$site_url?>/">대메뉴3</a></li>
							</ul>
						</div>
						<!-- 2차메뉴 -->
						<div class="menu-location location2 cm-drop-menu-box-JS" data-drop-event="click">
							<button class="cur-location cm-drop-open-btn-JS">
								<span><?=$sub_info?></span>
								<i class="xi-angle-down-min arrow"></i>
							</button>
							<ul class="location-menu-con cm-drop-list-JS">
								<?  include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
							</ul>
						</div>
					</div>
				</div>
			</aside>
			<?}?>
			
			<!-- content -->
			<section id="content" class="<?if($content_type == "wide"){?>wide<?}else{?>area<?}?>">
				<!-- ****************** 상단정보 ********************** -->
				<!-- 상단정보 (기본/센터정렬) -->
				<aside id="contentInfoCon" class="area" data-scroll="fade-up">
					<h3 class="content-tit"><?if($sub_info){?><?=$sub_info?><?}else{?><?=$page_info?><?}?></h3>
					<p class="content-sub-tit">언제나 처음 시작하였던 다짐과 포부로 미래를 열어가겠습니다. </p>
				</aside>
				<!-- 상단정보 (왼쪽타이틀 +오른쪽 location) -->
				<aside id="contentInfoCon" class="content-title-location clearfix area" data-scroll="fade-up">
					<h3 class="content-tit"><?if($sub_info){?><?=$sub_info?><?}else{?><?=$page_info?><?}?></h3>
					<div class="location">
						<ul>
							<li><a href="<?=$site_url?>/index.php" title="HOME"><i class="xi-home"></i></a></li>
							<li><?=$page_info?></li>
							<?if($sub_info){?><li><?=$sub_info?></li><?}?>
						</ul>
					</div>
				</aside>