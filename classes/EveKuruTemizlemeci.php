<?php

class EveKuruTemizlemeci extends KuruTemizlemeci
{
	private $evdenTeslimAlinsinMi;
	private $eveTeslimEdilsinMi;

	public function __construct($teslimAlinsin = true, $teslimEdilsin = true)
	{
		parent::__construct();
		$this->evdenTeslimAlinsinMi = $teslimAlinsin;
		$this->eveTeslimEdilsinMi = $teslimEdilsin;
	}

	public function temizle()
	{
		if($this->evdenTeslimAlinsinMi) $this->evdenTeslimAl();
		parent::temizle();
		if($this->eveTeslimEdilsinMi) $this->eveTeslimEt();
	}

	private function evdenTeslimAl()
	{
		echo $this->camasir . " evden teslim alındı<br>";
	}

	private function eveTeslimEt()
	{
		echo $this->camasir . " eve teslim edildi<br>";
	}
}