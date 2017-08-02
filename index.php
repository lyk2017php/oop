<?php

require_once "KuruTemizlemeci.php";

$mahmut = new KuruTemizlemeci;
$mahmut->camasir = "aşorman";
$mahmut->yika();

$mahmut->camasir = "göynek";
$mahmut->yika();

$mahmut->camasir = "süveter";
$mahmut->yika();