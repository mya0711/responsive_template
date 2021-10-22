<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>

<?
if($lang==1){//국문
	$page_index = "email";
	$title = "이메일 무단수집 거부";
} else if($lang==2){//영문
	$page_index = "email_en";
	$title = "Email Unauthorized Collection Denied";
} else if($lang==3){//중문
	$page_index = "email_cn";
	$title = "拒绝未经授权的电子邮件收集";
} else if($lang==4){//일문
	$page_index = "email_jp";
	$title = "이메일 무단수집 거부";
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