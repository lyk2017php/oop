<?php

function __autoload($className)
{
	echo($className . " sınıfı kullanılmak istendi, hemen getirelim<br>");
	require_once "classes/".$className.".php";
}

try{
	$mahmut = new EveKuruTemizlemeci;
	// $mahmut->camasir = "aşorman";
	// $mahmut->kurula(); // kurula() artık private olduğu için dışarıdan erişilemez

	$mahmut->setCamasir("göynek");
	$mahmut->temizle();
} catch (Exception $e) {
	echo $e->getMessage();
}
