<?php

function getPad(){
	//ICI ON RECUPERE LES INFOS DU PAD en français
	$url = "http://cedric-verger.fr/apiStats/language/fr";			
	$content = file_get_contents($url);
	$pad = $content;
	return $pad;
}


function translate($lang, $text){
	//ICI ON RECUPERE LA TRADUCTION
	$url = "http://cedric-verger.fr/apiStats/language/".$lang;			
	$content = file_get_contents($url);
	echo $content;
}


if(isset($_POST['lang'])){
	translate($_POST['lang'], $_POST['text']);
}