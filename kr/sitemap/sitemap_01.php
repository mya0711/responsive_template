<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>
<section id="siteMapCon01" class="cm-sitemap-wrapper">
	<article class="cm-sitemap-container-01">
		<h1 class="sitemap-tit">사이트맵</h1>
		<button onclick="ajaxUnLoad();" title="Close Sitemap" class="modal-close-btn sitemap-close-btn"><i class="xi-close-thin"></i></button>
		<article class="sitemap-wrapper-style01"></article>
	</article>
</section>

<script type="text/javascript">
	// 대메뉴복사 후 사이트맵 삽입
	var $sitemapGnbList = $("#gnb > ul > li");
	var gnbLength = $sitemapGnbList.length;
	$(".sitemap-wrapper-style01").append("<ul></ul>");
	
	for(var i=0; i < gnbLength; i++){
		var $gnb1depItem = $sitemapGnbList.eq(i).children("a");
		var $gnb2depList = $sitemapGnbList.eq(i).find(".gnb-2dep > ul").html() ? $sitemapGnbList.eq(i).find(".gnb-2dep > ul").html() :	'<a href="'+$gnb1depItem.attr("href")+'">'+$gnb1depItem.text()+'</a>';
		$(".sitemap-wrapper-style01 > ul").append('<li><h2>'+$gnb1depItem.text()+'</h2><ul class="sitemap-2dep">'+$gnb2depList+'</ul></li>');
	}
</script>