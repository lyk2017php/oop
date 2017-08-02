<?php

class KuruTemizlemeci
{
	var $camasir;

	function temizle()
	{
		$this->yika();
		$this->kurula();
		$this->utule();
		$this->paketle();
	}

	function yika()
	{
		echo $this->camasir . " yıkandı<br>";
	}

	function kurula()
	{
		echo $this->camasir . " kurulandı<br>";
	}

	function utule()
	{
		echo $this->camasir . " utulendi<br>";
	}

	function paketle()
	{
		echo $this->camasir . " paketlendi<br>";
	}
}