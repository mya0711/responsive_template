<?
$page_num = "01";
$sub_num = "03";
$page_section = "search";
$sub_section = "index";

$sub_info = "";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
if($lang==1){
$page_info = "통합검색";	// EN : Search / CH : 综合搜索 / JP : 統合検索
} else if($lang==2){
$page_info = "Search";	// EN : Search / CH : 综合搜索 / JP : 統合検索
} else if($lang==3){
$page_info = "综合搜索";	// EN : Search / CH : 综合搜索 / JP : 統合検索
} else if($lang==4){
$page_info = "統合検索";	// EN : Search / CH : 综合搜索 / JP : 統合検索
}
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
<?
if($_POST[allSearch]){
	
	$allSearch = $db->filter($_POST[allSearch]);

	$bbs_cnt = $db->cnt_join("cs_bbs_data a left join cs_bbs b on a.code=b.code ","where a.lang='$lang' and (a.subject like '%$allSearch%' or a.content like '%$allSearch%') and b.bbs_search=1");

	//언어설정 들어가면 lang 추가해주시면 됩니다.
	$goods_cnt = $db->cnt("cs_goods","where display=1 and (name like '%$allSearch%' or content like '%$allSearch%' or content_re like '%$allSearch%')");

	$all_cnt = $bbs_cnt+$goods_cnt;

}
	
?>
						
						<!-- 여기서부터 START (/search/index.php)-->
						<?if($lang==1){//국문?>
						<article class="search-result-top-container">
							<aside class="search-result-top-con">
								<div class="result-top-tit"><strong class="result-bold-txt">"<?=$allSearch?>"</strong> 검색결과</div>
								<?if($all_cnt>0){?>
								<p class="result-txt"><strong class="result-bold-txt">"<?=$allSearch?>"</strong> 에 대한 <b><?=$all_cnt?></b>개의 검색결과입니다.</p>
								<?}?>
								<?if($all_cnt==0){?>
								<!-- 검색결과가 없을때 -->
								<div class="no-result-txt">
									<p><strong class="result-bold-txt">"<?=$allSearch?>"</strong> 에 대한 검색결과가 없습니다. 다시 시도하여 주시기 바랍니다.</p>
									<ul>
										<li>- 단어의 철자가 정확한지 확인하세요.</li>
										<li>- 한글을 영어로 혹은 영어를 한글로 입력했는지 확인하세요.</li>
										<li>- 검색어의 단어 수를 줄이거나, 보다 일반적인 검색어로 다시 검색하세요.</li>
										<li>- 두 단어 이상의 검색어인 경우, 띄어쓰기를 확인하세요.</li>
									</ul>
								</div>
								<!-- // -->
								<?}?>
							</aside>
							<!-- 통합검색일때 넣어주세요 -->
							<article class="search-result-classify-con clearfix">
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="xi-search"></i> 게시글 검색 결과</p>
										<p class="result-info"><strong class="result-bold-txt"><?=$bbs_cnt?></strong>개의 컨텐츠가 <br>검색되었습니다.</p>
									</div>
								</div>
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="xi-search"></i> 제품 검색 결과</p>
										<p class="result-info"><strong class="result-bold-txt"><?=$goods_cnt?></strong>개의 컨텐츠가 <br>검색되었습니다.</p>
									</div>
								</div>
							</article>
							<!-- // -->
						</article>
						<?}?>

						<?if($lang==2){//영문?>
						<article class="search-result-top-container">
							<aside class="search-result-top-con">
								<div class="result-top-tit"><strong class="result-bold-txt">"<?=$allSearch?>"</strong> Search Result</div>
								<p class="result-txt"><b><?=$all_cnt?></b> results for <strong class="result-bold-txt">"<?=$allSearch?>"</strong>.</p>
								<!-- 검색결과가 없을때 -->
								<div class="no-result-txt">
									<p>No results for <strong class="result-bold-txt">"<?=$allSearch?>"</strong> Please try again.</p>
									<ul class="en-no-result-txt">
										<li>- Make sure the word is spelled correctly.</li>
										<li>- Make sure you have entered Korean as English or English as Korean.</li>
										<li>- Reduce the number of words in your query, or search again with more general terms.</li>
										<li>- If the search term is more than one word, check the spacing.</li>
									</ul>
								</div>
								<!-- // -->
							</aside>
							<!-- 통합검색일때 넣어주세요 -->
							<article class="search-result-classify-con clearfix">
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="xi-search"></i> Search results</p>
										<p class="result-info"><strong class="result-bold-txt"><?=$bbs_cnt?></strong>content found.</p>
									</div>
								</div>
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="xi-search"></i> Product search results</p>
										<p class="result-info"><strong class="result-bold-txt"><?=$goods_cnt?></strong>content found.</p>
									</div>
								</div>
							</article>
							<!-- // -->
						</article>
						<?}?>

						<?if($lang==3){//중문?>
						<article class="search-result-top-container">
							<aside class="search-result-top-con">
								<div class="result-top-tit"><strong class="result-bold-txt">"<?=$allSearch?>"</strong>搜索结果</div>
								<p class="result-txt"><strong class="result-bold-txt">"<?=$allSearch?>"</strong> 对于 <b><?=$all_cnt?></b>结果来自.</p>
								<!-- 검색결과가 없을때 -->
								<div class="no-result-txt">
									<p><strong class="result-bold-txt">"<?=$allSearch?>"</strong> 找不到结果。 请再试一次。</p>
									<ul>
										<li>- 确保单词拼写正确。</li>
										<li>- 确保您输入韩语为英语或英语为韩语。</li>
										<li>- 减少查询中的字数，或使用更一般的术语再次搜索。</li>
										<li>- 如果搜索词不止一个单词，请检查间距。</li>
									</ul>
								</div>
								<!-- // -->
							</aside>
							<!-- 통합검색일때 넣어주세요 -->
							<article class="search-result-classify-con clearfix">
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="xi-search"></i> 帖子 搜索结果</p>
										<p class="result-info"><strong class="result-bold-txt"><?=$bbs_cnt?></strong>内容已被检索。</p>
									</div>
								</div>
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="xi-search"></i> 生产 搜索结果</p>
										<p class="result-info"><strong class="result-bold-txt"><?=$goods_cnt?></strong>内容已被检索。</p>
									</div>
								</div>
							</article>
							<!-- // -->
						</article>
						<?}?>

						<?if($lang==4){//일문?>
						<article class="search-result-top-container">
							<aside class="search-result-top-con">
								<div class="result-top-tit"><strong class="result-bold-txt">"<?=$allSearch?>"</strong>検索結果</div>
								<p class="result-txt"><strong class="result-bold-txt">"<?=$allSearch?>"</strong>の<b><?=$all_cnt?></b>本検索結果です。</p>
								<!-- 검색결과가 없을때 -->
								<div class="no-result-txt">
									<p><strong class="result-bold-txt">"<?=$allSearch?>"</strong>の検索結果がありません。再試行してください。</p>
									<ul>
										<li> - 単語のスペルが正しいことを確認してください。</li>
										<li> - ハングルを英語でまたは英語をハングルで入力してください。</li>
										<li> - 検索の単語数を減らすか、より一般的な用語で再検出します。</li>
										<li> - 複数の単語を検索の場合、スペースを確認してください。</li>
									</ul>
								</div>
								<!-- // -->
							</aside>
							<!-- 통합검색일때 넣어주세요 -->
							<article class="search-result-classify-con clearfix">
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="xi-search"></i> スレッド検索結果</p>
										<p class="result-info"><strong class="result-bold-txt"><?=$bbs_cnt?></strong>のコンテンツが検索されました。</p>
									</div>
								</div>
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="xi-search"></i> 製品検索結果</p>
										<p class="result-info"><strong class="result-bold-txt"><?=$goods_cnt?></strong>のコンテンツが検索されました。</p>
									</div>
								</div>
							</article>
							<!-- // -->
						</article>
						<?}?>

						<section class="total-search-result-list-con">
<?
$bbs_rs = $db->select("cs_bbs","where bbs_search=1 order by idx asc");
while($bbs_row = mysqli_fetch_object($bbs_rs)){//전체 게시판 루프 시작
	$list_bbs_cnt = $db->cnt("cs_bbs_data","where code='$bbs_row->code' and lang='$lang' and (subject like '%$allSearch%' or content like '%$allSearch%')");

	//반드시 여기를 수정해주세요.
	if($bbs_row->code=="notice" or $bbs_row->code=="board"){
		$sub_domain = "notice/".$bbs_row->code.".php";
	}
	
?>
							<?if($list_bbs_cnt>0){?>
							<?if($bbs_row->bbs_type==4){//FAQ형 게시판?>
							<article class="total-search-result-con search-faq-con">
							<?} else {?>
							<article class="total-search-result-con total-search-board-result-con">
							<?}?>
								<div class="totabl-search-list-tit-box clearfix">
									<?if($lang==1){//국문?>
									<h3 class="total-search-list-tit"><strong><?=$bbs_row->name?></strong> 검색결과</h3>
									<a href="./search_board.php?allSearch=<?=$allSearch?>&code=<?=$bbs_row->code?>" class="total-search-more-btn" title="게시글 검색결과 더보기"><i class="xi-list-square"></i></a>
									<?}?>

									<?if($lang==2){//영문?>
									<h3 class="total-search-list-tit"><strong><?=$bbs_row->name?></strong> Search Results</h3>
									<a href="./search_board.php?allSearch=<?=$allSearch?>&code=<?=$bbs_row->code?>" class="total-search-more-btn" title="Posts Search Results"><i class="xi-list-square"></i></a>
									<?}?>

									<?if($lang==3){//중문?>
									<h3 class="total-search-list-tit"><strong><?=$bbs_row->name?> </strong> 搜索结果</h3>
									<a href="./search_board.php?allSearch=<?=$allSearch?>&code=<?=$bbs_row->code?>" class="total-search-more-btn" title="帖子 搜索结果"><i class="xi-list-square"></i></a>
									<?}?>

									<?if($lang==4){//일문?>
									<h3 class="total-search-list-tit"><strong><?=$bbs_row->name?> </strong> 検索結果</h3>
									<a href="./search_board.php?allSearch=<?=$allSearch?>&code=<?=$bbs_row->code?>" class="total-search-more-btn" title="スレッド 検索結果"><i class="xi-list-square"></i></a>
									<?}?>
								</div>
								<?if($bbs_row->bbs_type==4){//FAQ형 게시판?>
								<article class="search-bbs-faq-list">
									<article class="search-faq-list-con faq-category-list-con">
<?
$bbs_data_rs = $db->select("cs_bbs_data","where code='$bbs_row->code' and lang='$lang' and (subject like '%$allSearch%' or content like '%$allSearch%') order by idx desc LIMIT 5");
while($bbs_data_row = mysqli_fetch_object($bbs_data_rs)){
	if($bbs_row->bbs_cate==1 and $bbs_data_row->cate){
		$row_cate = $db->object("cs_cate","where code='$bbs_row->code' and idx='$bbs_data_row->cate'");
	}

	$content = $bbs_data_row->content;
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
													<strong class="faq-title"><?=$db->stripSlash($bbs_data_row->subject);?></strong>
													<span class="arrow"><i class="xi-angle-down-min"></i></span>
												</div>
											</dt>
											<dd>
												<span class="answer-icon">A</span>
												<div class="answer-con">
													<div class="editor"><?=$content;?></div>
												</div>
											</dd>
										</dl>
<?}?>
										
									</article>
								</article>
								<?} else {//FAQ형 게시판 제외 다른 게시판들?>
								<ul class="total-search-result-bbs-list">
<?
$bbs_data_rs = $db->select("cs_bbs_data","where code='$bbs_row->code' and lang='$lang' and (subject like '%$allSearch%' or content like '%$allSearch%') order by idx desc LIMIT 5");
while($bbs_data_row = mysqli_fetch_object($bbs_data_rs)){
	if($bbs_row->bbs_cate==1 and $bbs_data_row->cate){
		$row_cate = $db->object("cs_cate","where code='$bbs_row->code' and idx='$bbs_data_row->cate'");
	}

	
?>
									<?if($bbs_row->bbs_type==3){?>
									<li class="thumb-item"><!-- 갤러리 형식의 리스트이면 thumb-item 를 붙여야함 -->

										<? if($_SESSION['USERID']){ ?>
											<? if($_SESSION['USERID']==$bbs_data_row->userid){ ?>
												<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$bbs_data_row->idx?>">
											<? } else { ?>
												<? if($bbs_data_row->secret=="y"){ ?>	
													<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=pass&bbs_view_secr=1&idx=<?=$bbs_data_row->idx;?>">
												<? } else { ?>
													<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$bbs_data_row->idx?>">
												<? } ?>
											<? } ?>
										<? } else { ?>
											<? if($bbs_data_row->secret=="y"){ ?>
												<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=pass&bbs_view_secr=1&idx=<?=$bbs_data_row->idx;?>">
											<? } else { ?>
												<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$bbs_data_row->idx?>">
											<? } ?>
										<? } ?>

										<?if($bbs_row->bbs_cate==1){//카테고리형이면?>
											<span class="result-cate"><?=$row_cate->name?></span>
										<?}?>
											<span class="result-thumb">
											<?if($bbs_row->bbs_video==1){//유튜브 사용?>
											<?if($bbs_data_row->sum_file){//유튜브 사용 but 썸네일 따로 사용?>
											<img src="<?=$site_host?>/data/bbsData/<?=$bbs_data_row->sum_file?>" alt="">
											<?} else {//유튜브용 썸네일 사용?>
											<img src="http://img.youtube.com/vi/<?=$bbs_data_row->video_code?>/mqdefault.jpg" alt="">
											<?}?>
											<?} else {//유튜브 미사용?>
											<img src="<?=$site_host?>/data/bbsData/<?=$bbs_data_row->sum_file?>" alt="">
											<?}?>
											</span>
											<strong class="result-tit"><?=$db->stripSlash($bbs_data_row->subject);?></strong>
											<p class="result-txt"><?=strip_tags($bbs_data_row->content)?></p>
										</a>
									</li>
									<?} else {?>
									<li>
										<? if($_SESSION['USERID']){ ?>
											<? if($_SESSION['USERID']==$bbs_row->userid){ ?>
												<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$bbs_data_row->idx?>">
											<? } else { ?>
												<? if($bbs_row->secret=="y"){ ?>	
													<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=pass&bbs_view_secr=1&idx=<?=$bbs_data_row->idx;?>">
												<? } else { ?>
													<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$bbs_data_row->idx?>">
												<? } ?>
											<? } ?>
										<? } else { ?>
											<? if($bbs_row->secret=="y"){ ?>
												<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=pass&bbs_view_secr=1&idx=<?=$bbs_data_row->idx;?>">
											<? } else { ?>
												<a href="<?=$site_url?>/<?=$sub_domain?>?bgu=view&idx=<?=$bbs_data_row->idx?>">
											<? } ?>
										<? } ?>
										<?if($bbs_row->bbs_cate==1){//카테고리형이면?>
											<span class="result-cate"><?=$row_cate->name?></span>
										<?}?>
											<strong class="result-tit"><?=$db->stripSlash($bbs_data_row->subject);?></strong>
											<p class="result-txt"><?=strip_tags($bbs_data_row->content)?></p>
										</a>
									</li>
									<?}?>
<?}?>
									
								</ul>
								<?}?>

							</article>
							<?}?>
<?}?>


							<!-- 통합검색일때 ( 제품검색 ) -->
							<?if($lang==1){//국문?>
							<article class="total-search-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>제품</strong> 검색결과</h3>
									<a href="./search_product.php" class="total-search-more-btn" title="제품 검색결과 더보기"><i class="xi-list-square"></i></a>
								</div>
								해당 프로젝트에 들어가는 제품 리스트 넣어주세요
							</article>
							<?}?>

							<?if($lang==2){//영문?>
							<article class="total-search-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>Product </strong> Search Results</h3>
									<a href="./search_product.php" class="total-search-more-btn" title="Product Search Results"><i class="xi-list-square"></i></a>
								</div>
								해당 프로젝트에 들어가는 제품 리스트 넣어주세요
							</article>
							<?}?>

							<?if($lang==3){//중문?>
							<article class="total-search-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>生产  </strong> 搜索结果</h3>
									<a href="./search_product.php" class="total-search-more-btn" title="生产 搜索结果"><i class="xi-list-square"></i></a>
								</div>
								해당 프로젝트에 들어가는 제품 리스트 넣어주세요
							</article>
							<?}?>

							<?if($lang==4){//일문?>
							<article class="total-search-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>製品  </strong> 検索結果</h3>
									<a href="./search_product.php" class="total-search-more-btn" title="製品 検索結果"><i class="xi-list-square"></i></a>
								</div>
								해당 프로젝트에 들어가는 제품 리스트 넣어주세요
							</article>
							<?}?>
						</section>
						

					
						<!-- // 여기까지 -->
 
 
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
