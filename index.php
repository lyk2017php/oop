<?php

require_once "KuruTemizlemeci.php";

$mahmut = new KuruTemizlemeci;
$mahmut->camasir = "aşorman";
$mahmut->temizle();

$mahmut->camasir = "göynek";
$mahmut->temizle();

$mahmut->camasir = "süveter";
$mahmut->temizle();