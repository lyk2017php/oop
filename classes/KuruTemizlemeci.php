<?php

class KuruTemizlemeci
{
    protected $camasir;

    public function __construct()
    {
        echo "Kuru temizlemeciye hoş geldiniz<br>";
    }

    public function __destruct()
    {
        echo "Bizi tercih ettiğiniz için teşekkürler. Yine bekleriz<hr>";
    }

    public function setCamasir($cmsr)
    {
        if( gettype($cmsr) != "string" ) throw new Exception("Çamaşır için gönderilen parametre doğru değere sahip değil. String değer bekleniyorken siz <b>". gettype($cmsr) . "</b> tipinde bir değer göndermişsiniz.<br>");
        $this->camasir = $cmsr;
    }

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