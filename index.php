<?
$Qs=$_SERVER["QUERY_STRING"];
$Qs=(strlen($Qs)>0)? "?".$Qs:"";
header("HTTP/1.1 301 Moved Permanently");
header("Location:http://".$_SERVER[HTTP_HOST]."/kr/index.php".$Qs);
?>