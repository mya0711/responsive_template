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
/* css */

</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<img src="/images/content/content_ready_img.jpg" alt="현재 페이지는 준비중입니다." style="display:block; margin:0 auto; max-width:100%;" />
				<!-- //컨텐츠 내용 -->

				<!-- 스크롤 템플릿 -->
				<div class="custom-scrollbar-wrapper">
					<div class="scroll-object-box">
						<img src="/images/content/ie8_popup.png" alt="" class="scroll-object" /><!-- 이미지에 scroll-object -->
					</div>
					<div class="custom-scrollbar-cover">
						<div class="scroll-cover-txt">
							<i class="material-icons">&#xe913;</i>
							<p>좌우로 드래그 해보세요</p>
						</div>
					</div>
				</div>
				<!-- 테이블 스크롤 템플릿 -->
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
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
