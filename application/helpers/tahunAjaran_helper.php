<?php

function Ajaran(){

	$current = date('Y-m-d');
	$bulan = date("m", strtotime($current));
	$tahun = date("Y", strtotime($current));
	$ajaran = $tahun . "/" . ($tahun+1);
	if($bulan > 9){
		$ajaran = ($tahun+1) . "/" . ($tahun+2);
	}

	return $ajaran;
}


?>
