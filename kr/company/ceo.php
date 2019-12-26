<?
$page_num = "01";
$sub_num = "01";
$page_section = "company";
$sub_section = "ceo";
$page_info = "회사소개";
$sub_info = "CEO인사말";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
#content{max-width:none;}
@media all and (max-width:1220px){
	#content{margin:0 -15px;}
}
</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<section class="company-wrapper" style="background-color:#eee;">
					<div class="company-inner area">
						<p style="line-height:30px; font-size:16px; color:#222;">Wide컨텐츠가 들어갔을때는 #content{max-width:none; } 사용<br>테스트입니다</p>
						<img src="/images/content/content_ready_img.jpg" alt="현재 페이지는 준비중입니다." style="display:block; margin:0 auto; max-width:100%;" />
					</div>
				</section>
				<!-- //컨텐츠 내용 -->
				
				<article class="area">
					<!-- 테이블 스크롤 템플릿 -->
					<p style="line-height:30px; font-size:16px; color:#222;">테이블 모바일로 줄었을때 스크롤붙는 샘플입니다</p>
					<div class="custom-scrollbar-wrapper">
						<div class="scroll-object-box">
							<table class="test-table scroll-object"><!-- 테이블 scroll-object -->
								<tbody>
									<colgroup>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
									</colgroup>
									<tr>
										<th>1</th>
										<th>2</th>
										<th>3</th>
										<th>4</th>
										<th>5</th>
										<th>6</th>
										<th>7</th>
										<th>8</th>
										<th>9</th>
										<th>10</th>
									</tr>
									<tr>
										<td>복잡한</td>
										<td>테이블</td>
										<td>모바일로 줄일때</td>
										<td>스크롤이 생기며</td>
										<td>터치로</td>
										<td>이동이</td>
										<td>가능</td>
										<td>합니다</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="custom-scrollbar-cover">
							<div class="scroll-cover-txt">
								<i class="material-icons">&#xe913;</i>
								<p>좌우로 드래그 해보세요</p>
							</div>
						</div>
					</div>
				</article>

				<article class="area">
					<!-- 해당영역으로 영역움직이기 -->
					<br><br>
					<p style="line-height:30px; font-size:16px; color:#222;">메뉴가 fixed되고 누르면 해당영역으로 가는 샘플입니다.</p>
					<article class="fixed-tab-container">
						<aside class="fixed-move-tab-list-wrapper">
							<div class="fixed-move-tab-list">
								<div class="fixed-move-tab-inner">
									<ul class="clearfix">
										<li class="selected"><a href="#fixedContent1">내용1</a></li>
										<li><a href="#fixedContent2">내용2</a></li>
										<li><a href="#fixedContent3">내용3</a></li>
									</ul>
								</div>
							</div>
						</aside>
						<div class="fixed-move-content-wrapper">
							<div class="fixed-tab-content" id="fixedContent1">
								내용1
							</div>
							<div class="fixed-tab-content" id="fixedContent2">
								내용2
							</div>
							<div class="fixed-tab-content" id="fixedContent3">
								내용3
							</div>
						</div>
					</article>
				</article>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
