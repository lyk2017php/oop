<?php

class KuruTemizlemeci
{
	var $camasir;

	function yika()
	{
		echo $this->camasir . " yıkandı<br>";
	}
}

$mahmut = new KuruTemizlemeci;
$mahmut->camasir = "aşorman";
$mahmut->yika();

$mahmut->camasir = "göynek";
$mahmut->yika();

$mahmut->camasir = "süveter";
$mahmut->yika();