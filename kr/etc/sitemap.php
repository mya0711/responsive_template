<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>
<section id="siteMapCon" class="footer-modal-content">
	<button onclick="ajaxUnLoad();" title="팝업 닫기" class="modal-close-btn"><i class="xi-close-thin"></i></button>
	<h1>사이트맵</h1>
	<article class="sitemap-wrapper"></article>
</section>

<script type="text/javascript">
	// 대메뉴복사 후 사이트맵 삽입
	var $gnbList = $("#gnb > ul > li");
	var gnbLength = $gnbList.length;
	$(".sitemap-wrapper").append("<ul></ul>");
	
	for(var i=0; i < gnbLength; i++){
		var gnbText = $gnbList.eq(i).children("a").text();
		var gnb2depList = $gnbList.eq(i).find(".gnb-2dep > ul").html() ? $gnbList.eq(i).find(".gnb-2dep > ul").html() :	'<a>test</a>';
		$(".sitemap-wrapper > ul").append('<li><h2>'+gnbText+'</h2><ul class="sitemap-2dep">'+gnb2depList+'</ul></li>');
	}
</script>