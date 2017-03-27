<?php
include("function.php");
include("template.php");


$MP3Quran_Class = new MP3Quran();

if(!isset($_GET['language']) && $_GET['language'] == ""){
$_GET['language'] = $MP3Quran_Class->default_language;
}

if(isset($_GET['data']) && $_GET['data'] == "main"){
	$get_conten = $MP3Quran_Class->mp3quran_json_language();
}elseif(isset($_GET['data']) && $_GET['data'] == "reciters_by_rewaya"){
	$get_conten = $MP3Quran_Class->rewayat_loop();
}elseif(isset($_GET['data']) && $_GET['data'] == "reciters_by_letter"){
	$get_conten = $MP3Quran_Class->alphabet_loop();
}elseif(isset($_GET['data']) && $_GET['data'] == "reciters"){
	$get_conten = $MP3Quran_Class->mp3quran_json_reciters();
}elseif(isset($_GET['data']) && $_GET['data'] == "surah"){
	$get_conten = $MP3Quran_Class->mp3quran_json_surah();
}else{
	$get_conten = $MP3Quran_Class->mp3quran_json_language();
}

$title = $MP3Quran_Class->mp3quran_get_title(0);
$site_description = $MP3Quran_Class->mp3quran_get_title(1);
$MP3Quran_Class->site_keywords = 'islam,English,quran,books,articles,categories,pdf,doc,docx,mp3,mp4,coran,Germany,France,Farsi';
$MP3Quran_Class->site_banner = '<div class="ads"><a target="_blank" href="http://www.muslim-library.com"><img alt="Muslim Library" src="images/muslim-library.gif" /></a></div>';
$MP3Quran_Class->site_js = "";

echo Template_body(1, $title, $site_description, "");
echo $get_conten;
echo '<div style="clear:both;"></div>';
echo Template_body(2, "", "", "", "");
?>

