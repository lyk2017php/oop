<?php

class KuruTemizlemeci
{
	public $camasir;

	public function temizle()
	{
		$this->yika();
		$this->kurula();
		$this->utule();
		$this->paketle();
	}

	private function yika()
	{
		echo $this->camasir . " yıkandı<br>";
	}

	private function kurula()
	{
		echo $this->camasir . " kurulandı<br>";
	}

	private function utule()
	{
		echo $this->camasir . " utulendi<br>";
	}

	private function paketle()
	{
		echo $this->camasir . " paketlendi<br>";
	}
}