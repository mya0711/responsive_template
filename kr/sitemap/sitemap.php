<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>

<style>
/* 수정한 파일 layout.css / layout_responsive.css / layer_popup.js */

/* 공통 max-width 자유롭게 수정해주세요. */
.footer-modal-content{max-width: 1500px;}
/* 3번 */
.modal-fixed-pop-wrapper {background-color: #333;}
/* 4번 */
/* .modal-inner-box {top: 185px; display: block;}
.modal-fixed-pop-wrapper{overflow-y: hidden; background-color: #0c1015;}
@media all and (max-width:800px){
	.modal-inner-box{top: 0;}
	.modal-fixed-pop-wrapper{overflow-y: visible;}
} */
/* 5번 */
/* .footer-modal-content{max-width: none; margin: 0;} */
</style>

<section id="siteMapCon03" class="footer-modal-content">
	<!-- 2,4,5번 제외 공통 -->
	<h1>SITE MAP <button onclick="ajaxUnLoad();" title="팝업 닫기" class="modal-close-btn"><i class="xi-close-min"></i></button></h1>
	<article class="sitemap-wrapper"></article> 
	<!-- 4번 -->
	<!-- 
		<button onclick="ajaxUnLoad();" title="팝업 닫기" class="modal-close-btn"><i class="xi-close-thin"></i></button>
		<article class="sitemap-wrapper"></article>
	-->
	<!-- 5번 -->
	<!-- <div class="site-map-con">
		<div class="area">
			<h1>SITE MAP</h1>
			<article class="sitemap-wrapper"></article>
		</div>
	</div>
	<button onclick="ajaxUnLoad();" title="팝업 닫기" class="modal-close-btn sitemap-close-btn"><span class="line line1"></span><span class="line line2"></span><span class="line line3"></span></button> -->
</section>

<script type="text/javascript">
	// 대메뉴복사 후 사이트맵 삽입
	var $sitemapGnbList = $("#gnb > ul > li");
	var gnbLength = $sitemapGnbList.length;
	$(".sitemap-wrapper").append("<ul></ul>");
	
	for(var i=0; i < gnbLength; i++){
		var $gnb1depItem = $sitemapGnbList.eq(i).children("a");
		var $gnb2depList = $sitemapGnbList.eq(i).find(".gnb-2dep > ul").html() ? $sitemapGnbList.eq(i).find(".gnb-2dep > ul").html() :	'<a href="'+$gnb1depItem.attr("href")+'">'+$gnb1depItem.text()+'</a>';
		/* 4번 제외 공통 */
		$(".sitemap-wrapper > ul").append('<li><h2>'+$gnb1depItem.text()+'</h2><ul class="sitemap-2dep">'+$gnb2depList+'</ul></li>');
		/* 4번 */
		//$(".sitemap-wrapper > ul").append('<li><span class="num">0'+i+'</span><h2>'+$gnb1depItem.text()+'</h2><ul class="sitemap-2dep">'+$gnb2depList+'</ul></li>');
	}
</script>