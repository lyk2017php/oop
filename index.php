<?php

require_once "KuruTemizlemeci.php";
require_once "EveKuruTemizlemeci.php";

try{
	$mahmut = new EveKuruTemizlemeci;
	// $mahmut->camasir = "aşorman";
	// $mahmut->kurula(); // kurula() artık private olduğu için dışarıdan erişilemez

	$mahmut->setCamasir("göynek");
	$mahmut->temizle();
} catch (Exception $e) {
	echo $e->getMessage();
}
