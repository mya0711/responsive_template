<?
$page_num = "01";
$sub_num = "03";
$page_section = "search";
$sub_section = "index";
$page_info = "통합검색";
$sub_info = "";
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
$(document).ready(function  () {
	$(".search-bbs-faq-list").each(function  () {
		var $faqItem = $(this).find(".faq-item");

		$faqItem.children("dt").click(function  () {
			var $faqCon = $(this).siblings();
			if ($faqCon.css("display") == "block") {
				$(this).siblings().slideUp();
				$(".faq-item").removeClass("open");
			}else {
				$(".faq-item > dd:visible").slideUp();
				$(".faq-item").removeClass("open");
				$(this).parent("dl").addClass("open");
				$faqCon.slideDown();	
			}
		});
	});
});
</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

<?if($_GET[allSearch] and $_GET[code]){
	$allSearch = $db->filter($_GET[allSearch]);
	$code = $db->filter($_GET[code]);;
	$bbs_row = $db->object("cs_bbs","where code='$code'");
	$cnt = $db->cnt("cs_bbs_data","where code='$code' and lang='$lang' and (subject like '%$allSearch%' or content like '%$allSearch%')");
} else {
	$tools->alertJavaGo("비정상적인 접근입니다.","/");
}
?>
 
<?
$listScale	= 10;
$pageScale	= 5;
if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));
     
$table	= "cs_bbs_data";

$query		= "select * from $table where code='$code' and lang='$lang'";
if($allSearch){
	$query .= " and (subject like '%$allSearch%' or content like '%$allSearch%')";
}
$rs		= mysqli_query($db2,$query);
$totalList	= mysqli_num_rows($rs);
$query		= "select * from $table where code='$code' and lang='$lang'";
if($allSearch){
	$query .= " and (subject like '%$allSearch%' or content like '%$allSearch%')";
}

$query.= " order by idx desc LIMIT $startPage, $listScale";
$result = mysqli_query($db2,$query);
if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>
					<!-- 각각 상세 페이지 (/search/search_board.php) -->
					<section class="search-result-detail-container">
					<article class="search-result-top-container">
						<article class="search-result-classify-con clearfix">
							<div class="search-result-classify-item">
								<div class="search-result-classify-inner">
									<p class="result-list-tit"><i class="material-icons"></i> <?=$bbs_row->name?> 검색 결과</p>
									<p class="result-info"><strong class="result-bold-txt"><?=$cnt?></strong>개의 컨텐츠가 검색되었습니다.</p>
								</div>
							</div>
						</article>
					</article>
					<article class="total-search-result-list-con">

					<?if($bbs_row->bbs_type==4){//FAQ형 게시판이면?>
						<article class="search-bbs-faq-list">
							<article class="search-faq-list-con faq-category-list-con">
<?
while($row = mysqli_fetch_object($result)){
	if($bbs_row->bbs_cate==1 and $row->cate){
		$row_cate = $db->object("cs_cate","where code='$bbs_row->code' and idx='$row->cate'");
	}

	//반드시 여기를 수정해주세요.
	if($row->code=="notice" or $row->code=="board"){
		$sub_domain = "notice/".$row->code.".php";
	}

	$content = $row->content;
	$content = str_replace("<P>","",$content);
	$content = str_replace("</P>","<br/>",$content);
	$content = str_replace("<p>","",$content);
	$content = str_replace("</p>","<br/>",$content);
	$content = $tools->strHtml($content);
?>
								<dl class="faq-item">
									<dt>
										<div class="faq-subject">
											<span class="question-icon">Q</span>
											<?if($bbs_row->bbs_cate==1){?>
											<span class="faq-category">[<?=$row_cate->name?>]</span>
											<?}?>
											<strong class="faq-title"><?=$db->stripSlash($row->subject);?></strong>
											<span class="arrow"><i class="material-icons">&#xE313;</i></span>
										</div>
									</dt>
									<dd>
										<span class="answer-icon">A</span>
										<div class="answer-con">
											<div class="editor"><?=$content?></div>
										</div>
									</dd>
								</dl>
<?}?>
								
							</article>
						</article>
					<?} else {?>
						<article class="total-search-result-con total-search-board-result-con">
							<ul class="total-search-result-bbs-list">
<?
while($row = mysqli_fetch_object($result)){
	if($bbs_row->bbs_cate==1 and $row->cate){
		$row_cate = $db->object("cs_cate","where code='$bbs_row->code' and idx='$row->cate'");
	}

	//반드시 여기를 수정해주세요.
	if($row->code=="notice" or $row->code=="board"){
		$sub_domain = "notice/".$row->code.".php";
	}
?>
								<?if($bbs_row->bbs_type==3){?>
								<li class="thumb-item"><!-- 갤러리 형식의 리스트이면 thumb-item 를 붙여야함 -->
									<? if($_SESSION['USERID']){ ?>
										<? if($_SESSION['USERID']==$row->userid){ ?>
											<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$row->idx?>">
										<? } else { ?>
											<? if($row->secret=="y"){ ?>	
												<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=pass&bbs_view_secr=1&idx=<?=$row->idx;?>">
											<? } else { ?>
												<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$row->idx?>">
											<? } ?>
										<? } ?>
									<? } else { ?>
										<? if($row->secret=="y"){ ?>
											<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=pass&bbs_view_secr=1&idx=<?=$row->idx;?>">
										<? } else { ?>
											<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$row->idx?>">
										<? } ?>
									<? } ?>
										<?if($bbs_row->bbs_cate==1){//카테고리형이면?>
										<span class="result-cate"><?=$row_cate->name?></span>
										<?}?>
										<span class="result-thumb">
										<?if($bbs_row->bbs_video==1){//유튜브 사용?>
										<?if($row->sum_file){//유튜브 사용 but 썸네일 따로 사용?>
										<img src="<?=$site_host?>/data/bbsData/<?=$row->sum_file?>" alt="">
										<?} else {//유튜브용 썸네일 사용?>
										<img src="http://img.youtube.com/vi/<?=$row->video_code?>/mqdefault.jpg" alt="">
										<?}?>
										<?} else {//유튜브 미사용?>
										<img src="<?=$site_host?>/data/bbsData/<?=$row->sum_file?>" alt="">
										<?}?>
										</span>
										<strong class="result-tit"><?=$db->stripSlash($row->subject);?></strong>
										<p class="result-txt"><?=strip_tags($row->content)?></p>
									</a>
								</li>
								<?} else {?>
								<li>
									<? if($_SESSION['USERID']){ ?>
										<? if($_SESSION['USERID']==$row->userid){ ?>
											<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$row->idx?>">
										<? } else { ?>
											<? if($row->secret=="y"){ ?>	
												<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=pass&bbs_view_secr=1&idx=<?=$row->idx;?>">
											<? } else { ?>
												<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$row->idx?>">
											<? } ?>
										<? } ?>
									<? } else { ?>
										<? if($row->secret=="y"){ ?>
											<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=pass&bbs_view_secr=1&idx=<?=$row->idx;?>">
										<? } else { ?>
											<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$row->idx?>">
										<? } ?>
									<? } ?>
										<?if($bbs_row->bbs_cate==1){//카테고리형이면?>
										<span class="result-cate"><?=$row_cate->name?></span>
										<?}?>
										<strong class="result-tit"><?=$db->stripSlash($row->subject);?></strong>
										<p class="result-txt"><?=strip_tags($row->content)?> </p>
									</a>
								</li>
								<?}?>
								
								
<?}?>
							</ul>
						</article>
					<?}?>

						<div class="paging paging-style02">
							<?
							$pageURL= "allSearch=".urlencode($allSearch);
							$pageURL.= "&code=".urlencode($code);


							if( $totalList > $listScale ) {
								if( $startPage+1 > $listScale*$pageScale ) {
									$prePage = $startPage - $listScale * $pageScale;
									echo "<a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$prePage' class='paging-arrow'><i class='xi-angle-left-min'></i></a>";
								}
								for( $j=0; $j<$pageScale; $j++ ) {
									$nextPage = ($totalPage * $pageScale + $j) * $listScale;
									$pageNum = $totalPage * $pageScale + $j+1;
									if( $nextPage < $totalList ) {
										if( $nextPage!= $startPage ) {
											echo "<a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$nextPage'>$pageNum</a>";
										} else {
											echo "<a href='javascript:;' class='cur'>$pageNum</a>";
										}
									}
								}
								if( $totalList > (($totalPage+1) * $listScale * $pageScale)) {
									$nNextPage = ($totalPage+1) * $listScale * $pageScale;
									echo "<a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$nNextPage' class='paging-arrow'><i class='xi-angle-right-min'></i></a>";
								}
							}
							if( $totalList <= $listScale) {
								echo "<a href='javascript:;' class='cur'>1</a>";
							}
							?>
						</div>
					</article>
					</section>
					<!-- // -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
