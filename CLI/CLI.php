<?php

// RESET CLI
function fungsi_reset(){
	system('reset');
}

// CLEAR CLI
function fungsi_clear(){
	system('clear');
}

function fungsi_ganti_lokasi($target){
	chdir($target);
}

function fungsi_cek_lokasi(){
//	global $ganti_baris;
//	echo $ganti_baris;
	$a = getcwd();
	return $a;
}

function fungsi_cek_lokasi_sekarang($xx){
	$a = basename($xx);
	return $a;
}

function fungsi_tree(){
	$a = system("tree");
	return $a;
}

function tree_all(){
	$a = system("tree -a");
	return $a;
}

function fungsi_daftar_berkas(){
	system('ls');
}

//  SSH
function fungsi_cek_ssh(){
	system('ssh-add -l');
}

function fungsi_ssh($target){
	system('ssh-add '.$target);
}

?>