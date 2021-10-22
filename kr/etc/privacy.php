<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>

<?
if($lang==1){//국문
	$page_index = "privacy";
	$title = "개인정보처리방침";
} else if($lang==2){//영문
	$page_index = "privacy_en";
	$title = "Privacy Policy";
} else if($lang==3){//중문
	$page_index = "privacy_cn";
	$title = "个人信息处理方针";
} else if($lang==4){//일문
	$page_index = "privacy_jp";
	$title = "個人情報処理方針";
}
?>

<section class="footer-modal-content">
	<button onclick="ajaxUnLoad();" title="팝업 닫기" class="modal-close-btn"><i class="xi-close-thin"></i></button>
	<h1><?=$title?></h1>
	<div class="footer-inner-box">
		<div class="footer-inner editor">
			
		<?
		$rs = $db->select("cs_page","where page_index='$page_index'");
		$row = mysqli_fetch_object($rs);
		$content  = $row->content; 
		?>
		<?
		$content = str_replace("<P>","",$content);
		$content = str_replace("</P>","<br/>",$content);
		$content = str_replace("<p>","",$content);
		$content = str_replace("</p>","<br/>",$content);
		$content = $tools->strHtml($content);?>
     
        <?=$content?>


		</div>
	</div>
</section>