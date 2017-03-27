<?php
function Template_body($type=0, $title="",$description="", $text=""){
global $current_page, $_GET, $MP3Quran_Class;

	if(isset($_GET['language']) && $_GET['language'] != "" && in_array($_GET['language'], $MP3Quran_Class->language_code)){
		$language = strip_tags($_GET['language']);
	}else{
		$language = $MP3Quran_Class->default_language;
	}
	
$buffer = "\n";

$headers = '<!DOCTYPE html>'.$buffer;
$headers .= '<html lang="en">'.$buffer;
$headers .= '<head>'.$buffer;
$headers .= '<meta charset="utf-8">'.$buffer;
$headers .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.$buffer;
$headers .= '<meta name="viewport" content="width=device-width, initial-scale=1">'.$buffer;
$headers .= '<meta name="description" content="'.$description.'">'.$buffer;
$headers .= '<meta name="keywords" content="'.$MP3Quran_Class->site_keywords.'" />'.$buffer;
$headers .= '<meta name="author" content="'.$MP3Quran_Class->site_author.'">'.$buffer;
$headers .= '<link rel="icon" href="images/favicon.ico">'.$buffer;
$headers .= '<title>'.$title.'</title>'.$buffer;
$headers .= '<link href="css/bootstrap.min.css" rel="stylesheet">'.$buffer;
$headers .= '<link href="css/style.css" rel="stylesheet">'.$buffer;
$headers .= '<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->'.$buffer;
if($language == "arabic"){
$headers .= '<link rel="stylesheet" type="text/css" href="css/rtl.css" />'.$buffer;
}elseif($language == "urdu"){
$headers .= '<link rel="stylesheet" type="text/css" href="css/rtl-without-arabic.css" />'.$buffer;
}elseif($language == "farsi"){
$headers .= '<link rel="stylesheet" type="text/css" href="css/rtl-without-arabic.css" />'.$buffer;
}elseif($language == "uyghur"){
$headers .= '<link rel="stylesheet" type="text/css" href="css/rtl-without-arabic.css" />'.$buffer;
}else{
$headers .= '';
}

$headers .= '<script>
  function changesound(ID) {
    var sound_id = document.getElementById("sound");
    sound_id.innerHTML = \'<audio controls autoplay><source src="\'+ID+\'" type="audio/mpeg">Your browser does not support the audio element.</audio><p><a href="\'+ID+\'">'.$MP3Quran_Class->w('download').'</a></p>\';
  }
  </script>'.$buffer;

$baseurl = $current_page->baseurl;
$headers .= '<link rel="alternate" hreflang="ar" href="'.$baseurl.'index.php?data=reciters&language=arabic" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="en" href="'.$baseurl.'index.php?data=reciters&language=english" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="fr" href="'.$baseurl.'index.php?data=reciters&language=france" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="ru" href="'.$baseurl.'index.php?data=reciters&language=russia" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="de" href="'.$baseurl.'index.php?data=reciters&language=germany" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="es" href="'.$baseurl.'index.php?data=reciters&language=spain" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="tr" href="'.$baseurl.'index.php?data=reciters&language=turkey" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="zh" href="'.$baseurl.'index.php?data=reciters&language=china" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="th" href="'.$baseurl.'index.php?data=reciters&language=thai" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="ur" href="'.$baseurl.'index.php?data=reciters&language=urdu" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="bn" href="'.$baseurl.'index.php?data=reciters&language=bengali" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="bs" href="'.$baseurl.'index.php?data=reciters&language=bosnia" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="ug" href="'.$baseurl.'index.php?data=reciters&language=uyghur" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="fa" href="'.$baseurl.'index.php?data=reciters&language=farsi" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="tj" href="'.$baseurl.'index.php?data=reciters&language=tajeki" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="ml" href="'.$baseurl.'index.php?data=reciters&language=malayalam" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="tl" href="'.$baseurl.'index.php?data=reciters&language=tagalog" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="id" href="'.$baseurl.'index.php?data=reciters&language=indonesia" />'.$buffer;
$headers .= '<link rel="alternate" hreflang="pt" href="'.$baseurl.'index.php?data=reciters&language=portuguese" />'.$buffer;
$headers .= $MP3Quran_Class->site_js;
$headers .= '</head>'.$buffer;
$headers .= '<body>'.$buffer;
$headers .= '<div class="container">'.$buffer;

/* Start header */
$headers .= '<div id="page-wrapper">'.$buffer;
$headers .= '<div id="logo-bar-wrapper">'.$buffer;
	$headers .= '<div id="logo-bar">'.$buffer;
		$headers .= '<div id="logo-wrapper">'.$buffer;
			$headers .= '<div id="logo"><a href="index.php"><img id="site-logo" alt="'.$MP3Quran_Class->w('title').'" src="css/images/logo.png" /></a></div>'.$buffer;
			$headers .= $MP3Quran_Class->site_banner.$buffer;
			$headers .= '<div style="clear:both;">&nbsp;</div>'.$buffer;
		$headers .= '</div>'.$buffer;
	$headers .= '</div>'.$buffer;
$headers .= '</div>'.$buffer;
$headers .= '</div>'.$buffer;

$headers .= '<nav class="navbar navbar-default">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            
<ul class="nav navbar-nav">';
$languages_info = $MP3Quran_Class->languages_info();

$headers .= '<li class="active"><a href="index.php">'.$MP3Quran_Class->w('home').'</a></li>';
if($language == "arabic" || $language == "english"){
$headers .= '<li><a href="index.php?data=reciters&language='.$language.'">'.$MP3Quran_Class->w('reciters').'</a></li>';
$headers .= '<li><a href="index.php?data=reciters_by_letter&language='.$language.'">'.$MP3Quran_Class->w('reciters_by_letter').'</a></li>';
$headers .= '<li><a href="index.php?data=reciters_by_rewaya&language='.$language.'">'.$MP3Quran_Class->w('reciters_by_rewaya').'</a></li>';
}else{
$headers .= '<li><a href="index.php?data=reciters&language=arabic">'.$languages_info['arabic'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=english">'.$languages_info['english'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=france">'.$languages_info['france'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=spain">'.$languages_info['spain'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=germany">'.$languages_info['germany'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=russia">'.$languages_info['russia'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=turkey">'.$languages_info['turkey'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=urdu">'.$languages_info['urdu'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=farsi">'.$languages_info['farsi'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=indonesia">'.$languages_info['indonesia'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=bengali">'.$languages_info['bengali'][0].'</a></li>';
$headers .= '<li><a href="index.php?data=reciters&language=bosnia">'.$languages_info['bosnia'][0].'</a></li>';
}
$headers .= '</ul>


          </div><!--/.nav-collapse -->
</nav>';


$headers .= '<div style="clear:both;"></div>';
/* End header */

$headers .= '<div class="well">';

$footer = '</div>';

$footer .= '<div id="footer">
<div class="powered">'.$MP3Quran_Class->w("footer").'</div>
</div>';
        
$footer .= '</div>';

$footer .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>';
$footer .= '<script src="js/bootstrap.min.js"></script>';
//$footer .= '<script src="js/bootstrap.js"></script>';

$footer .= '</body>';
$footer .= '</html>';

if($type == 1){
$code = $headers;
}elseif($type == 2){
$code = $footer;
}else{
$code = $headers;
$code .= $text;
$code .= $footer;
}
return $code;
}

function Template_widget($title="", $text="", $type=1){
if($type == 1){
$classname = 'panel-default';
}elseif($type == 2){
$classname = 'panel-primary';
}elseif($type == 3){
$classname = 'panel-success';
}elseif($type == 4){
$classname = 'panel-info';
}elseif($type == 5){
$classname = 'panel-warning';
}elseif($type == 6){
$classname = 'panel-danger';
}else{
$classname = 'panel-default';
}

$code = '<div class="panel '.$classname.'">';
$code .= '<div class="panel-heading">';
$code .= '<h3 class="panel-title">'.$title.'</h3>';
$code .= '</div>';
$code .= '<div class="panel-body">';
$code .= $text;
$code .= '</div>';
$code .= '</div>';
return $code;
}
?>