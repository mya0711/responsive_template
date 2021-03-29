<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?if($page_info){?><?=$site_title_last?><?} else {?><?=$site_head_title?><?}?></title>
<meta name="Title" content="<?if($page_info){?><?=$site_title_last?><?} else {?><?=$site_head_title?><?}?>">
<meta name="Subject" content="<?=$site_subject?>">
<meta name="Keywords" content="<?=$site_keywords?>">
<meta name="Description" content="<?=$site_description?>">
<meta property="og:type" content="<?=$og_type?>">
<meta property="og:title" content="<?=$og_title?>">
<meta property="og:description" content="<?=$og_description?>">
<meta property="og:image" content="<?=$og_image?>">
<meta property="og:url" content="<?=$og_url?>">
<meta name="twitter:card" content="<?=$sns_card?>">
<meta name="twitter:title" content="<?=$sns_title?>">
<meta name="twitter:description" content="<?=$sns_description?>">
<meta name="twitter:image" content="<?=$sns_image?>">
<meta name="twitter:domain" content="<?=$sns_domain?>">
<meta name="google-site-verification" content="<?=$google_verification?>">
<meta name="naver-site-verification" content="<?=$naver_verification?>">
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- 모바일사이트, 반응형사이트 제작시 사용 -->
<meta name="format-detection" content="telephone=no"/><!-- ios 자동전화걸기 방지 -->
<meta name="NaverBot" content="All"/>
<meta name="NaverBot" content="<?=$site_robots?>"/>
<meta name="Yeti" content="All"/>
<meta name="Yeti" content="<?=$site_robots?>"/>
<meta name="Googlebot" content="All" />
<meta name="Googlebot" content="<?=$site_robots?>" />
<meta name="Robots" content="<?=$site_robots?>">
<meta name="theme-color" content="#222222">
<link rel="canonical" href="<?=$site_host?>">
<link rel="stylesheet" href="<?=$site_host?>/css/default.css">
<link rel="stylesheet" href="<?=$site_host?>/css/layout.css">
<link rel="stylesheet" href="<?=$site_host?>/css/content.css">
<link rel="stylesheet" href="<?=$site_host?>/css/main.css" />
<link rel="stylesheet" href="<?=$site_url?>/css/language.css" /><!-- 해당언어에서만 사용하는 css -->
<link rel="stylesheet" href="<?=$site_host?>/css/layout_responsive.css">
<link rel="stylesheet" href="<?=$site_host?>/css/content_responsive.css">
<link rel="stylesheet" href="<?=$site_host?>/css/main_responsive.css" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons"><!-- google -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css"><!-- naver -->
<!-- Board Skin -->
<link rel="stylesheet" href="<?=$site_host?>/css/common/cm_bbs_common.css">
<link rel="stylesheet" href="<?=$site_host?>/css/common/cm_board.css">
<link rel="stylesheet" href="<?=$site_host?>/css/common/cm_gallery.css" />
<!-- Plugin -->
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/slick.css">
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/aos.css" />
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/swiper.css" />

<script type="text/javascript" src="<?=$site_host?>/js/vendor/jquery-1.8.3.min.js"></script>