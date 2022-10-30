<?php

function f_tes($isi_tes){
	global $warna_reset, $ganti_baris;
	$tes = $ganti_baris.f_teks_kuning_tebal("[ TES ]"."\t = $isi_tes").$warna_reset.$ganti_baris;
	echo $tes;
}

?>