
	<section id="siteMapCon02" class="cm-sitemap-wrapper">
		<article class="cm-sitemap-container cm-sitemap-container-02">
			<div class="sitemap-bg-box"></div>
			<article class="sitemap-wrapper-style sitemap-wrapper-style02"></article>
		</article>
		<button title="Close Sitemap" class="sitemap-close-btn cm-sitemap-close-btn"><i class="xi-close-thin"></i></button>
	</section>

	<script type="text/javascript">
		$(document).ready(function  () {
			for(var i=0; i < gnbLength; i++){
				$(".sitemap-bg-box").append('<div class="visual-intro-item" style="width:'+(100 / gnbLength)+'%;"></div>');
			}
		});
	</script>