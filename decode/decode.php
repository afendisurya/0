<?php

function fungsi_parsing_html($var_fungsi_parsing_html, $tag_1, $tag_2, $urutan){
	$langkah_1 = explode($tag_1, $var_fungsi_parsing_html);
	$langkah_2 = explode($tag_2, $langkah_1[$urutan]);
	return $langkah_2[0];
}

function fungsi_parsing_json($var_fungsi_parsing_json){
	$json = json_decode($var_fungsi_parsing_json, true);
	return $json;	
}

function fungsi_parsing_yaml_encode($x){
	$yaml = yaml_emit($x);
	return $yaml;
}

function fungsi_parsing_yaml_encode_file($target_file, $target_isi){
	$a = yaml_emit_file($target_file, $target_isi);
	return $a;
}

function fungsi_parsing_yaml_decode($x){
	$yaml = yaml_parse($x);
	return $yaml;
}

?>