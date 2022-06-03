<? include $_SERVER["DOCUMENT_ROOT"]."/common.php"; ?>
<? $admin_stat = $db->object("cs_seo", ""); ?>
<?
$lang="1";	// 국문 1, 영문 2, 중문 3, 일문 4
$site_directory = "/kr";
$site_url = $site_host.$site_directory;
$site_head_title = $admin_stat->title;
$site_title = $admin_stat->title;
$site_subject = $admin_stat->title;
$site_keywords = $admin_stat->keywords;
$site_description = $admin_stat->description;
$site_robots = "INDEX,FOLLOW";
$og_type = "website";
$og_title = $site_title;
$og_description	= $site_description;
$og_image = $site_host."/images/common/logo.png";
$og_url = $site_host.$_SERVER["REQUEST_URI"];
$sns_card = "summary";
$sns_title = $site_title;
$sns_description = $site_description;
$sns_image = $site_host."/images/common/logo.png";
$sns_domain = $site_host.$_SERVER["REQUEST_URI"];
$google_verification = $admin_stat->google_meta;
$naver_verification = $admin_stat->naver_meta;
$script_content = $admin_stat->script_content;
?>

<?//푸터 추가
$footer_row = $db->object("cs_footer","where lang='$lang'");

$footer_company			= $footer_row->company; //상호명
$footer_address			= $footer_row->address; //주소
$footer_tel				= $footer_row->tel; //전화번호
$footer_fax				= $footer_row->fax; //팩스번호
$footer_name			= $footer_row->name; //대표자명
$footer_email			= $footer_row->email; //이메일
$footer_license_number	= $footer_row->license_number; //사업자등록번호
$footer_mail_number		= $footer_row->mail_number; //통신판매신고번호
?>

<?
if($bgu=="view" and $idx){ 
	$idx = $db->filter($idx);
	$row = $db->object("cs_bbs_data","where idx='$idx'");
	$bbs_title = $row->subject;
}
?>